<?php
class BroSolutions_SimpleRefund_Block_Adminhtml_Sales_Order_View_Tab_Creditmemos_Totalrenderer extends
    Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $grandTotal = $row->getGrandTotal();
        $grandTotal = Mage::helper('core')->currency($grandTotal, true, false);
        return $grandTotal;
    }
}