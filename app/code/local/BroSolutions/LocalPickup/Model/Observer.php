<?php
class BroSolutions_LocalPickup_Model_Observer
{
    public function paymentMethodIsActive(Varien_Event_Observer $observer)
    {
        $event = $observer->getEvent();
        $method = $event->getMethodInstance();
        $result = $event->getResult();
        $methodCode = $method->getCode();
        $quote = $event->getQuote();
        $isShippingMethodLocalPickup = false;
        if($quote && $quote->getId()){
            $address = $quote->getShippingAddress();
            if($address){
                $shippingMethod = $address->getShippingMethod();
                $isShippingMethodLocalPickup = (strpos($shippingMethod, 'brosolutionslocalpickup') !== false);
            }
        }
        if (strpos($methodCode, BroSolutions_LocalPickup_Helper_Data::PAYMENT_METHOD_CODE_PARD_FOR_ALLOW_IF_LOCAL_PICKUP) !== false) {
            if($isShippingMethodLocalPickup){
                $result->isAvailable = true;
            } else {
                $result->isAvailable = false;
            }
        }
        return $this;
    }
}