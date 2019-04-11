<?php 
class Ecomwise_Creditlimit_Block_Credit_Rules_Edit extends Mage_Adminhtml_Block_Widget_Form_Container{
	
   public function __construct()
   {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'ecomwisecredit';
        $this->_controller = 'credit_rules';
        $this->_updateButton('save', 'label','Save');     
        $this->_removeButton('reset');
    }
       
    public function getHeaderText()
    {
        if( Mage::registry('creditlimit')&&Mage::registry('creditlimit')->getId())
         {             
         	return Mage::helper('ecomwisecredit')->__('Edit Rule');
         }
         else
         {
             return Mage::helper('ecomwisecredit')->__('Create Rule');
         }
    }
} 