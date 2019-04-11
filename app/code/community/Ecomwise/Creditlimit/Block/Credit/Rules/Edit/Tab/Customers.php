<?php
class Ecomwise_Creditlimit_Block_Credit_Rules_Edit_Tab_Customers
    extends Mage_Adminhtml_Block_Widget_Form
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
   
	/**
	 * Prepare content for tab
	 *
	 * @return string
	 */
	public function getTabLabel()
	{
		return Mage::helper('ecomwisecredit')->__('Customer');
	}
	
	/**
	 * Prepare title for tab
	 *
	 * @return string
	 */
	public function getTabTitle()
	{
		return Mage::helper('ecomwisecredit')->__('Customer');
	}
	
	/**
	 * Returns status flag about this tab can be showed or not
	 *
	 * @return true
	 */
	public function canShowTab()
	{
		return true;
	}
	
	/**
	 * Returns status flag about this tab hidden or not
	 *
	 * @return true
	 */
	public function isHidden()
	{
		return false;
	}
	
	public function __construct()
	{
		parent::__construct();
	
		$roleId = $this->getRequest()->getParam('id', false);	
		$users = Mage::getModel("customer/customer")->getCollection()->load();	
		$this->setTemplate('ecomwisecredit/customers.phtml')
		->assign('users', $users->getItems())
		->assign('roleId', $roleId);
	}
	
	protected function _prepareLayout()
	{		
		$grid_block = $this->getLayout()->createBlock('ecomwisecredit/credit_rules_grid_user', 'customersGrid');
		
		$this->setChild('customersGrid', $grid_block);			
		return parent::_prepareLayout();
	}	
	
	protected function _getGridHtml()
	{
		return $this->getChildHtml('customersGrid');
	}	
	
	protected function _getJsObjectName()
	{
		return $this->getChild('userGrid')->getJsObjectName();
	} 	
	
}
