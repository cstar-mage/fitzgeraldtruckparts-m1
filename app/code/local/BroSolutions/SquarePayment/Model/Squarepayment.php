<?php
class BroSolutions_SquarePayment_Model_Squarepayment extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'squarepayment';

    protected $_isInitializeNeeded      = false;
    protected $_canUseInternal          = false;
    protected $_canUseForMultishipping  = false;
    protected $_formBlockType = 'squarepayment/squarepayment';
	protected $_transactionKeys = array('id' => 'Transaction ID', 'location_id' => 'Location ID', 'created_at' => 'Created At', 'product' => 'Product');
	protected $_tenderKeys = array('id' => 'Tender Id', 'location_id' => 'Location ID', 'transaction_id' => 'Transaction ID', 'created_at' => 'Created At', 'note' => 'Note',
										'amount_money' => 'Amount Money');

	public function authorize(Varien_Object $payment, $amount)
    {
		$order = $payment->getOrder();
        $result = $this->_callApi($order);
		$errors = $result->getErrors();
		$errorMsg = false;
		if($errors) {
            $errorCode = 'Invalid Data';
			if(Mage::registry('square_payment_error')){
				$errorMsg = Mage::registry('square_payment_error');
				Mage::unregister('square_payment_error');
			} else {
				$errorMsg = $this->_getHelper()->__('Error Processing the request');	
			}
        } else {
            $transaction = $result->getTransaction();
            $payment->setTransactionId($transaction->getId());
            $payment->setIsTransactionClosed(0);
            $payment->setTransactionAdditionalInfo(Mage_Sales_Model_Order_Payment_Transaction::RAW_DETAILS,$this->_fillAdditionalFields($transaction)); 
        }
        if($errorMsg){
            Mage::throwException($errorMsg);
        }
		
        return $this;
    }
	
	
	
	
	public function isAvailable($quote = null)
    {
		return Mage::getStoreConfig('payment/squarepayment/enabled');
    }
		
	protected function _callApi($order)
	{
		$post = Mage::app()->getRequest()->getParams();
        if (isset($post['payment']) && isset($post['payment']['method']) && 'squarepayment' != $post['payment']['method']) {
            return $this;
        }

        $squarePaymentToken = Mage::getSingleton('checkout/session')->getData('square_payment_token');
		Mage::getSingleton('checkout/session')->setData('square_payment_token', false);
        if (!$squarePaymentToken) {
            return $this;
        }
        if (!Mage::registry('square_payment_request_sent')) {
            Mage::register('square_payment_request_sent', true);
            $orderIncId = $order->getIncrementId();
            $baseGrandTotal = $order->getBaseGrandTotal();
            $orderCurrencyCode = $order->getOrderCurrencyCode();
            $locationId = Mage::getStoreConfig(BroSolutions_SquarePayment_Helper_Data::XML_PATH_FOR_PAYMENT_LOCATION_ID);
            $accessToken = Mage::getStoreConfig(BroSolutions_SquarePayment_Helper_Data::XML_PATH_FOR_ACCESS_TOKEN);
            require_once('lib' . DS . 'Squarepayment' . DS . 'autoload.php');
            $transactionApi = new \SquareConnect\Api\TransactionApi();
            $requestBody = array(
                "card_nonce" => $squarePaymentToken,
                "amount_money" => array(
                    "amount" => ceil($baseGrandTotal * 100),
                    "currency" => $orderCurrencyCode
                ),

                "idempotency_key" => $orderIncId . '-' . rand(),
            );
            $isSuccess = true;
            $errorMessage = '';
            try {
                $result = $transactionApi->charge($accessToken, $locationId, $requestBody);
                return $result;
            } catch (Exception $e) {
                $requestBodyArr = $e->getResponseBody();
                if (isset($requestBodyArr->errors) && is_array($requestBodyArr->errors)) {
                    foreach ($requestBodyArr->errors as $error) {
                        if (isset($error->detail))
                            $errorMessage .= $error->detail;
                    }
                }
                if (!Mage::registry('square_payment_error')) {
                    Mage::register('square_payment_error', $errorMessage);
                }
                Mage::logException($e);
                $isSuccess = false;
            }
            if (!$isSuccess) {
                throw new Exception($errorMessage);
            }


        }
        return $isSuccess;
	}
	
	protected function _fillAdditionalFields($transaction)
	{
		$result = array();
		$tenders = $transaction->getTenders();
		//Mage::log($transaction);
		//Mage::log($tenders);
		foreach($this->_transactionKeys as $key => $label){
			$result[$label] = $transaction[$key];
		}
		foreach($this->_tenderKeys as $key => $label){
			//if($key == 'amount_money'){
					//;
			//} else {
				if(isset($tenders[$key])){
					$result[$label] = $tenders[$key];		
				}
			//}
		}
		return $result;
	}
	
}