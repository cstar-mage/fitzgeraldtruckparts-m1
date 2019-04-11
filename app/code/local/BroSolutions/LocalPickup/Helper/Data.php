<?php
class BroSolutions_LocalPickup_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_FOR_EXPRESS_MAX_WEIGHT = 'carriers/brosolutionslocalpickup/express_max_weight';
    const XML_PATH_SUCCESS_ACTION_TEXT = 'carriers/brosolutionslocalpickup/success_action_text';
    const XML_PATH_SHIPPING_METHOD_SUBTITLE = 'carriers/brosolutionslocalpickup/subtitle';
    const PAYMENT_METHOD_CODE_PARD_FOR_ALLOW_IF_LOCAL_PICKUP = 'cashondelivery';

    
    public function getExpressMaxWeight()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOR_EXPRESS_MAX_WEIGHT);
    }

    public function getSuccessActionText()
    {
        return Mage::getStoreConfig(self::XML_PATH_SUCCESS_ACTION_TEXT);
    }

    public function getTextForSuccessPage($orderId)
    {
        $successPageText = '';
        if($orderId){
            $order = Mage::getModel('sales/order')->loadByIncrementId($orderId);
            if($order && $order->getId()){
                $shippingMethod = $order->getShippingMethod();
                if(strpos($shippingMethod, 'brosolutionslocalpickup') !== false){
                    $successPageText = $this->getSuccessActionText();
                }
            }
        }
        return $successPageText;
    }

    public function getMethodSubtitle()
    {
        return Mage::getStoreConfig(self::XML_PATH_SHIPPING_METHOD_SUBTITLE);
    }
}