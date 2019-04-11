<?php
class Ecomwise_Creditlimit_Block_Info_Pay extends Mage_Payment_Block_Info
{
    protected function _prepareSpecificInformation($transport = null)
    {
        if (null !== $this->_paymentSpecificInformation) {
            return $this->_paymentSpecificInformation;
        }
        $info = $this->getInfo();
        $transport = new Varien_Object();
        $transport = parent::_prepareSpecificInformation($transport);
        
        if(Mage::getStoreConfig('payment/pay_on_account/po_enabled')){
        	$transport->addData(array(
	            Mage::helper('ecomwisecredit')->__('Purchase Order Number') => $info->getCreditlimitPoNumber(),            
        	));
        }
        return $transport;
    }
}