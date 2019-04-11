<?php
class Ecomwise_Creditlimit_Block_Adminhtml_Customer_Edit_Tab_Limits
extends Mage_Adminhtml_Block_Widget_Form
implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
	/**
	 * Prepare content for tab
	 *
	 * @return string
	 */
	public function getTabLabel() {
		return Mage::helper('ecomwisecredit')->__('Credit Limit');
	}
	
	/**
	 * Prepare title for tab
	 *
	 * @return string
	 */
	public function getTabTitle() {
		return Mage::helper('ecomwisecredit')->__('Credit Limit');
	}
	
	/**
	 * Returns status flag about this tab can be showed or not
	 *
	 * @return true
	 */
	public function canShowTab() {
		if (Mage::registry('current_customer')->getId()) {
            return true;
        }
        return false;
	}
	
	/**
	 * Returns status flag about this tab hidden or not
	 *
	 * @return true
	 */
	public function isHidden() {
		if (!Mage::getStoreConfig('creditlimit/general/enabled')) {
			return true;
		}
		return false;
	}
	
	public function __construct() {
				
		parent::__construct();
	
		$customerId = $this->getRequest()->getParam('id', false);			
		$this->setTemplate('ecomwisecredit/customer/edit/tab/rules.phtml');
	}
	
	protected function _prepareLayout() {

		
		$grid_block = $this->getLayout()->createBlock('ecomwisecredit/adminhtml_customer_edit_tab_grid_rules', 'creditLimits');		
		$this->setChild('creditLimits', $grid_block);						
		
		return parent::_prepareLayout();
	}	
	
	protected function _getGridHtml() {
				
		return $this->getChildHtml('creditLimits');
	}	
	
} 