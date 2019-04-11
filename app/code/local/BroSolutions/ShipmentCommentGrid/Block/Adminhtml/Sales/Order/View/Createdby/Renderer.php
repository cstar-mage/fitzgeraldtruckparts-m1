<?php
class BroSolutions_ShipmentCommentGrid_Block_Adminhtml_Sales_Order_View_Createdby_Renderer extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        return $row->getData('admin_username');
    }

}