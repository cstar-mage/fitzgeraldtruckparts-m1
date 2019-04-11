<?php
class Ecomwise_Creditlimit_Block_Adminhtml_Creditlimit_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
 	public function __construct()
    {
        parent::__construct();

        $this->_controller = 'adminhtml_creditlimit';
        $this->_blockGroup = 'ecomwisecredit';  
        $this->_mode ='edit';
        
        parent::__construct();
        
        $this->_removeButton('save');
        $this->_removeButton('reset');
        $this->_removeButton('delete');
        $this->_removeButton('back');                   
    }

    public function getHeaderText()
    {
        return Mage::helper('adminhtml')->__('Info & Support');
    }
}  