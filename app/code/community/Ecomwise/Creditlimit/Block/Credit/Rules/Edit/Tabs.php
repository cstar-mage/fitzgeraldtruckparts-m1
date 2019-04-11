<?php
class Ecomwise_Creditlimit_Block_Credit_Rules_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('credit_limit');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('ecomwisecredit')->__('Limits'));
    }
}
