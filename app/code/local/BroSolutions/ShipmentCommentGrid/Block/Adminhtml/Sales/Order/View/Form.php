<?php
class BroSolutions_ShipmentCommentGrid_Block_Adminhtml_Sales_Order_View_Form extends Mage_Adminhtml_Block_Sales_Order_View_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('brosolutions/shipmentcommentgrid/form.phtml');
    }
}
