<?php
class Ecomwise_Creditlimit_Adminhtml_CreditlimitController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {    	    	
    	$this->_title($this->__('Info &amp; Support'));
    	
        $this->loadLayout();
        $this->_setActiveMenu('ecomwise/creditlimit');
        $this->_addBreadcrumb("Credit Limit");
        		
        $this->_addContent($this->getLayout()->createBlock('ecomwisecredit/adminhtml_creditlimit_edit'));
                
        $this->renderLayout();
    }  

	
	 
}  