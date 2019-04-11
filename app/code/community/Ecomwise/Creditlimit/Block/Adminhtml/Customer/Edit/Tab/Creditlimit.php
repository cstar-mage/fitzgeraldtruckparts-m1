<?php
class Ecomwise_Creditlimit_Block_Adminhtml_Customer_Edit_Tab_Creditlimit
    extends Mage_Adminhtml_Block_Widget
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{ 
	/**
	 * Set identifier and title
	 */
	public function __construct()
	{
		parent::__construct();
		$this->setId('creditlimit');
		$this->setTitle(Mage::helper('ecomwisecredit')->__('Credit Limit'));
	}
	
	/**
	 * Tab label getter
	 *
	 * @return string
	 */
	public function getTabLabel()
	{
		return $this->getTitle();
	}
	
	/**
	 * Tab title getter
	 *
	 * @return string
	 */
	public function getTabTitle()
	{
		return $this->getTitle();
	}
	
	/**
	 * Check whether tab can be showed
	 *
	 * @return bool
	 */
	public function canShowTab()
	{
		return true;
	}
	
	/**
	 * Check whether tab should be hidden
	 *
	 * @return bool
	 */
	public function isHidden()
	{
		if( !$this->getRequest()->getParam('id') ) {
			return true;
		}
		return false;
	}
	
	/**
	 * Tab class getter
	 *
	 * @return string
	 */
	public function getTabClass()
	{
		return 'ajax';
	}
	
	/**
	 * Check whether content should be generated
	 *
	 * @return bool
	 */
	public function getSkipGenerateContent()
	{
		return true;
	}
	
	/**
	 * Precessor tab ID getter
	 *
	 * @return string
	 */
	public function getAfter()
	{
		return 'tags';
	}	
}