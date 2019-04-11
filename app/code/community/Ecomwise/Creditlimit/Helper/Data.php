<?php
class Ecomwise_Creditlimit_Helper_Data extends Mage_Core_Helper_Abstract {
	
	public function getTotalOfOrders($section = 'front'){				
		$customer = $this->getCustomer($section);			
		$order_status_open = explode(',', Mage::getStoreConfig('creditlimit/parameters_creditlimit/order_status_open') );
		$creditlimit_method = Mage::getStoreConfig('creditlimit/parameters_creditlimit/payment_method');		
		
		$orderCollection=Mage::getModel('sales/order')->getCollection()
		->join(array('payment'=>'sales/order_payment'),'main_table.entity_id=parent_id','method');
		
		$orderCollection
		->addFieldToFilter('method',array(array('like'=>$creditlimit_method)))
		->addFieldToFilter('customer_id', array('eq' => array($customer->getId())))
		->addFieldToFilter('status',array('in' => $order_status_open ));		
		
		$total = 0;
		foreach($orderCollection as $order){
			$total += $order->getGrandTotal();
		}		
		return $total;		
	}
	
	public function getCreditLimit($section = 'front'){			
		$customer = $this->getCustomer($section);		
		$credit_limit = 0;
		if(Mage::getStoreConfig('creditlimit/parameters_creditlimit/use_global_limit')) {
			$credit_limit = Mage::getStoreConfig('creditlimit/parameters_creditlimit/global_limit');
		} else{
			$customer_id = $customer->getId();
			$rule = $this->getRuleByCustomer($customer_id);
			if($rule){
				$rules_collection = Mage::getModel('ecomwisecredit/limits')->getCollection()
				->addFieldToFilter("id",  array('eq'=> $rule->getRuleId() ) );
				
				if(count($rules_collection) > 0){
					$credit_limit = $rules_collection->getFirstItem()->getAmount();
				}
			}			
		}		
		return $credit_limit;
	}
	
	public function getCustomer($section = 'front'){
		if($section == 'front'){
			return Mage::getSingleton('customer/session')->getCustomer();
		} elseif ( $section == 'admin'){
			//return $this->getCustomer();
			return Mage::registry('current_customer');
		} else {
			return Mage::getModel('customer/customer')->load($section);
		}
	}
	
	public function getRuleByCustomer($customer_id){			
			
		$rules_collection = Mage::getModel('ecomwisecredit/limits_customers')->getCollection()
		->addFieldToFilter("customer_id",  array('eq'=> $customer_id ) )
		->addFieldToSelect('rule_id');
			
		if( count($rules_collection) > 0 ){
			return $rules_collection->getFirstItem();
		}
			
		return false;
	}
	
	public function isModuleDisabled(){		
		$redirect = true;		
		$modules = Mage::getConfig()->getNode('modules')->children();
		$modulesArray = (array)$modules;				
		$path = "creditlimit/general/enabled";
		if($this->isSuiteEnabled()){ // if suite is present			
			$path = "b2bsuite/general/enabled";			
			if($this->getConfig($path)){
				return $redirect;
			}			
			$path = "b2bsuite/extensions/creditlimit";
		}			
		return $this->getConfig($path);
	}	
	
	private function getConfig($path){
		$resource = Mage::getSingleton('core/resource');
		$cr = Mage::getSingleton('core/resource')->getConnection('core_read');
		$cw = Mage::getSingleton('core/resource')->getConnection('core_write');
		$config_table = $resource->getTableName('core_config_data');
		$redirect = true;
		$rows = $cr->fetchAll("Select value from ".$config_table." where path=?", $path);
		foreach($rows as $row){
			$enabled = $row['value'];
			if($enabled){
				$redirect = false;
				break;
			}
		}
		return $redirect;
	}
	
	public function isSuiteEnabled(){
		$modules = Mage::getConfig()->getNode('modules')->children();
		$modulesArray = (array)$modules;
		return ($modulesArray["Ecomwise_B2BSuite"] && $modulesArray["Ecomwise_B2BSuite"]->active->__toString() == "true" );
	}
	
}