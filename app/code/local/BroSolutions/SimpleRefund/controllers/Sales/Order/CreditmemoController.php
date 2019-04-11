<?php
require_once(Mage::getModuleDir('controllers','Mage_Adminhtml').DS.'Sales'.DS.'Order'.DS.'CreditmemoController.php');
class BroSolutions_SimpleRefund_Sales_Order_CreditmemoController extends Mage_Adminhtml_Sales_Order_CreditmemoController
{
    protected function _saveCreditmemo($creditmemo)
    {
        $simpleRefundAmount = Mage::helper('simplerefund')->getSimpleRefundTotalFromRequest();
        if($simpleRefundAmount){
            $creditmemo->setSubtotal($simpleRefundAmount);
            $creditmemo->setBaseSubtotal($simpleRefundAmount);
            $creditmemo->setSubtotalInclTax($simpleRefundAmount);
            $creditmemo->setBaseSubtotalInclTax($simpleRefundAmount);
            $creditmemo->setGrandTotal($simpleRefundAmount);
        }
        $transactionSave = Mage::getModel('core/resource_transaction')
            ->addObject($creditmemo)
            ->addObject($creditmemo->getOrder());
        if ($creditmemo->getInvoice()) {
            $transactionSave->addObject($creditmemo->getInvoice());
        }
        $transactionSave->save();

        return $this;
    }
}