<?php 
class Ecomwise_Creditlimit_AccountController extends Mage_Core_Controller_Front_Action{

	public function indexAction(){
						
		if(!Mage::getStoreConfig('creditlimit/general/enabled')) {
        	$this->getResponse()->setHeader('HTTP/1.1','404 Not Found');
			$this->getResponse()->setHeader('Status','404 File not found');
			$this->_forward('defaultNoRoute');
        }
        
		if(!Mage::getSingleton('customer/session')->isLoggedIn()){			
			Mage::getSingleton('customer/session')->authenticate($this);
			return;
		}		
		 
		$this->loadLayout();		
		$this->renderLayout();
	}
} 