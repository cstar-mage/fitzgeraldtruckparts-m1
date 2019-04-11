<?php 
class Ecomwise_Creditlimit_Block_Credit_Rules extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		$this->_controller = 'credit_rules';
		$this->_blockGroup = 'ecomwisecredit';	
		$this->_headerText = Mage::helper('ecomwisecredit')->__('Manage Limit Rules');		
		parent::__construct();
	}
	
} 