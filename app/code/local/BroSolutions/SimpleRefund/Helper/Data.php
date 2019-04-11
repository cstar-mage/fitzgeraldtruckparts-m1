<?php
class BroSolutions_SimpleRefund_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getSimpleRefundTotalFromRequest()
    {
        $request = Mage::app()->getRequest()->getParam('creditmemo', false);
        if($request){
            if(isset($request['is_simple_refund']) && isset($request['creditmemo_total'])){
                return $request['creditmemo_total'];
            }
        }
        return false;
    }

}