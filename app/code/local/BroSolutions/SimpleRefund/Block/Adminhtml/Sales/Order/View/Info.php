<?php
class BroSolutions_SimpleRefund_Block_Adminhtml_Sales_Order_View_Info extends Mage_Adminhtml_Block_Sales_Order_View_Info
{
    public function getCreditMemoCreatedAtFormatted()
    {
        $creditmemoId = $this->getRequest()->getParam('creditmemo_id');
        if($creditmemoId){
            $creditmemo = Mage::getModel('sales/order_creditmemo')->load($creditmemoId);
            if($creditmemo && $creditmemo->getId()){
                $createdAt = $creditmemo->getCreatedAt();
                $createdAtObj = DateTime::createFromFormat('Y-m-d H:i:s', $createdAt);
                $createdAtFormatted = $createdAtObj->format('M d, Y h:i A');
                return $createdAtFormatted;
            }
        }
        return false;
    }
}