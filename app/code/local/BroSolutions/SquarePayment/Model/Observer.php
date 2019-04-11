<?php

class BroSolutions_SquarePayment_Model_Observer
{
    public function sendSquarepaymentParam($event)
    {
        /*$post = Mage::app()->getRequest()->getParams();
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
            $order = $event->getOrder();
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
                $this->_createTransaction($result, $order);
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
                return false;
            }


        }*/
        return $this;
    }

    protected function _createTransaction($result, $order)
    {

    }
}