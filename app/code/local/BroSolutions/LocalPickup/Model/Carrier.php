<?php
class BroSolutions_LocalPickup_Model_Carrier extends Mage_Shipping_Model_Carrier_Abstract
    implements Mage_Shipping_Model_Carrier_Interface
{
    protected $_code = 'brosolutionslocalpickup';
    public function getAllowedMethods()
    {
        return array(
            'standard' => Mage::helper('brosolutionslocalpickup')->getMethodSubtitle(),
        );
    }

    public function collectRates(Mage_Shipping_Model_Rate_Request $request)
    {
        $result = Mage::getModel('shipping/rate_result');
        $result->append($this->_getStandardRate());
        return $result;
    }

    protected function _getStandardRate()
    {
        $rate = Mage::getModel('shipping/rate_result_method');
        $rate->setCarrier($this->_code);
        $rate->setCarrierTitle($this->getConfigData('title'));
        $rate->setMethod('standard');
        $rate->setMethodTitle(Mage::helper('brosolutionslocalpickup')->getMethodSubtitle());
        $rate->setPrice(0.00);
        $rate->setCost(0);
        return $rate;
    }
}