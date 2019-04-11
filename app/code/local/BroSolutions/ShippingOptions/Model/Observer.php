<?php
class BroSolutions_ShippingOptions_Model_Observer
{
    public function saveShippingOptionsToQuote($observer)
    {
        $request = $observer->getEvent()->getRequest();
        $quote = $observer->getEvent()->getQuote();
        if($request){
            $requestParams = $request->getParams();
            if(isset($requestParams['local_pickup_option']) && isset($requestParams['shipping_method']) && $requestParams['shipping_method'] == 'brosolutionslocalpickup_standard'){
                $quote->setLocalPickupOption($requestParams['local_pickup_option']);
                return $this;
            }
        }
        $quote->setLocalPickupOption(NULL);
        return $this;
    }
}