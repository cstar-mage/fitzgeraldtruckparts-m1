<?php
class BroSolutions_ShippingOptions_Helper_Data extends Mage_Core_Helper_Abstract
{
    protected $_localPickupShippingOptions;

    protected function _initShippingOptions()
    {
        $this->_localPickupShippingOptions = array(1 => $this->__('Sparta'), 2 => $this->__('Byrdstown'));
    }

    public function getLocalPickupShippingOptions()
    {
        $this->_initShippingOptions();
        return $this->_localPickupShippingOptions;
    }

    public function getShippingOptionLabelByKey($key)
    {
        $label = '';
        $this->_initShippingOptions();
        if(isset($this->_localPickupShippingOptions[$key])){
            $label = $this->_localPickupShippingOptions[$key];
        }
        return $label;
    }

    public function getSelectedShippingOption()
    {
        $quote = Mage::getSingleton('checkout/session')->getQuote();
        if($quote && $quote->getId()){
            return $quote->getLocalPickupOption();
        }
        return false;
    }
}