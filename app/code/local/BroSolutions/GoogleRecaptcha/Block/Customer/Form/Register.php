<?php
class BroSolutions_GoogleRecaptcha_Block_Customer_Form_Register extends Mage_Customer_Block_Form_Register
{
    public function canShowRecaptcha()
    {
        $websiteKey = $this->_helper()->getWebsiteKey();
        $secretKey = $this->_helper()->getSecretKey();
        if(!empty($websiteKey) && !empty($secretKey)){
            return true;
        }
        return false;
    }

    protected function _helper()
    {
        return Mage::helper('bsgooglerecaptcha');
    }

    public function getWebsiteKey()
    {
        return $this->_helper()->getWebsiteKey();
    }
}