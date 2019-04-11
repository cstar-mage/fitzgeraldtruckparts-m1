<?php
class Ecomwise_Creditlimit_Model_Pay extends Mage_Payment_Model_Method_Abstract
{
	protected $_code = 'pay_on_account';	
	protected $_formBlockType = 'ecomwisecredit/form_pay';
	protected $_infoBlockType = 'ecomwisecredit/info_pay';
	
	/**
	 * Method that will be executed instead of authorize or capture
	 * if flag isInitializeNeeded set to true
	 *
	 * @param string $paymentAction
	 * @param object $stateObject
	 *
	 * @return Mage_Payment_Model_Abstract
	 */
	public function initialize($paymentAction, $stateObject)
	{
		if(($status = $this->getConfigData('order_status'))) {
			$stateObject->setStatus($status);
			$state = $this->_getAssignedState($status);
			$stateObject->setState($state);
			$stateObject->setIsNotified(true);
		}
		return $this;
	}
	
	/**
	 * Get the assigned state of an order status
	 *
	 * @param string order_status
	 */
	protected function _getAssignedState($status)
	{
		$item = Mage::getResourceModel('sales/order_status_collection')
		->joinStates()
		->addFieldToFilter('main_table.status', $status)
		->getFirstItem();
	
		return $item->getState();
	}
	
 	/**
     * Check whether payment method can be used
     *
     * TODO: payment method instance is not supposed to know about quote
     *
     * @param Mage_Sales_Model_Quote|null $quote
     *
     * @return bool
     */
    public function isAvailable($quote = null)
    {
        $checkResult = new StdClass;
        $isActive = (bool)(int)$this->getConfigData('active', $quote ? $quote->getStoreId() : null);
        $checkResult->isAvailable = $isActive;
        $checkResult->isDeniedInConfig = !$isActive; // for future use in observers
        Mage::dispatchEvent('payment_method_is_active', array(
            'result'          => $checkResult,
            'method_instance' => $this,
            'quote'           => $quote,
        ));

        // if extension disabled from configuration
        if ($checkResult->isAvailable) {        	        	
        	$enabled = Mage::getStoreConfig('creditlimit/general/enabled', $quote->getStoreId());
        	if(!$enabled) {
        		$checkResult->isAvailable = false;
        	}
        } 
        
        // disable method if it cannot implement recurring profiles management and there are recurring items in quote
        if ($checkResult->isAvailable) {
            $implementsRecurring = $this->canManageRecurringProfiles();
            // the $quote->hasRecurringItems() causes big performance impact, thus it has to be called last
            if ($quote && !$implementsRecurring && $quote->hasRecurringItems()) {
                $checkResult->isAvailable = false;
            }
        }
        
        if ($checkResult->isAvailable) {
        	$aloved_customer_groups = explode(",", Mage::getStoreConfig('payment/pay_on_account/groups', $quote->getStoreId()));
	        
	        if(Mage::getSingleton('customer/session')->isLoggedIn()){
	        	
	        	$customer =  Mage::getSingleton('customer/session')->getCustomer();        	
	    
	        	if( !in_array($customer->getGroupId(), $aloved_customer_groups) ){
	        		$checkResult->isAvailable = false;
	        	}          	   	
	        	
	        }elseif(Mage::getSingleton('adminhtml/session_quote')->getQuoteId()){
	        	$customer = Mage::getModel('customer/customer')->load(Mage::getSingleton('adminhtml/session_quote')->getCustomerId());
	        	
	        	if( !in_array($customer->getGroupId(), $aloved_customer_groups) ){
	        		$checkResult->isAvailable = false;
	        	} 
	        }elseif(!in_array(0, $aloved_customer_groups)){	        	
	        	$checkResult->isAvailable = false;
	        }                 
        }
        
        return $checkResult->isAvailable;
    }
    
	public function assignData($data)
	{
		if (!($data instanceof Varien_Object)) {
			$data = new Varien_Object($data);
		}
		$info = $this->getInfoInstance();		
		$info->setCreditlimitPoNumber($data->getCreditlimitPoNumber());		
		return $this;
	}    
}