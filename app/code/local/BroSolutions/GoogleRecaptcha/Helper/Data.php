<?php
class BroSolutions_GoogleRecaptcha_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_GOOGLE_RECAPTHA_WEBSITE_KEY = 'bsgooglerecaptchasection/general/websitekey';
    const XML_PATH_GOOGLE_RECAPTHA_SECRET_KEY = 'bsgooglerecaptchasection/general/secretkey';

    public function getWebsiteKey()
    {
        return Mage::getStoreConfig(self::XML_PATH_GOOGLE_RECAPTHA_WEBSITE_KEY);
    }

    public function getSecretKey()
    {
        return Mage::getStoreConfig(self::XML_PATH_GOOGLE_RECAPTHA_SECRET_KEY);
    }
}