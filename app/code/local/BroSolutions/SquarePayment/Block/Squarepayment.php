<?php
class BroSolutions_SquarePayment_Block_Squarepayment extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('pay/form/squarepay.phtml');
    }

    public function getApplicationId()
    {
        $appId = Mage::getStoreConfig(BroSolutions_SquarePayment_Helper_Data::XML_PATH_FOR_APPLIXATION_ID);
        return $appId;
    }
    public function getMethodTitle()
    {
        $title = Mage::getStoreConfig(BroSolutions_SquarePayment_Helper_Data::XML_PATH_FOR_PAYMENT_METHOD_TITLE);
        return $title;
    }
}