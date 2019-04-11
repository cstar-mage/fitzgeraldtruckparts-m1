<?php 
class Ecomwise_Creditlimit_Block_Customer_Link extends Mage_Core_Block_Abstract
{
	public function addLinkToParentBlock()
	{
		if(!Mage::getSingleton('customer/session')->isLoggedIn()){
			return;
		}
		
	    $customerData = Mage::getSingleton('customer/session')->getCustomer();	      		
		
		$customer_id = $customerData->getId();
		$alowed_customer_groups = explode(",", Mage::getStoreConfig('creditlimit/parameters_creditlimit/hide_for_groups'));
		
		$parent = $this->getParentBlock();
		$rule = Mage::helper('ecomwisecredit')->getRuleByCustomer($customer_id);
		$rules_collection = array();
		
		if ($rule){
			$rules_collection = Mage::getModel('ecomwisecredit/limits')->getCollection()
			->addFieldToFilter("id",  array('eq'=> $rule->getRuleId() ) );					
		}
				
		if((count($rules_collection) > 0 && Mage::getStoreConfig('creditlimit/parameters_creditlimit/hide_credit_limit')) 
				|| (Mage::getStoreConfig('creditlimit/parameters_creditlimit/use_global_limit') && Mage::getStoreConfig('creditlimit/parameters_creditlimit/global_limit'))){			
			if ($parent) {					
				if (Mage::getStoreConfig('creditlimit/general/enabled') && Mage::getStoreConfig('creditlimit/parameters_creditlimit/use_limit') && !in_array($customerData->getGroupId(), $alowed_customer_groups)) {
					$parent->addLink(
							'Creditlimit',
							'creditlimit/account/index',
							$this->__('Credit Limit'),
							array('_secure' => Mage::app()->getStore()->isCurrentlySecure())
					);
				}
			}
		}
	
		elseif (!Mage::getStoreConfig('creditlimit/parameters_creditlimit/hide_credit_limit')) {	
			if ($parent) {		
				if (Mage::getStoreConfig('creditlimit/general/enabled') && Mage::getStoreConfig('creditlimit/parameters_creditlimit/use_limit')  && !in_array($customerData->getGroupId(), $alowed_customer_groups)) {																	
					$parent->addLink(
							'Creditlimit',
							'creditlimit/account/index',
							$this->__('Credit Limit'),
							array('_secure' => Mage::app()->getStore()->isCurrentlySecure())
					);		
				}									
			}
		}			
	}
}