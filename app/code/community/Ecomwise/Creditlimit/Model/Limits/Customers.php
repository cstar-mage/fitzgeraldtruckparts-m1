<?php
class Ecomwise_Creditlimit_Model_Limits_Customers extends Mage_Core_Model_Abstract {
	
	protected function _construct(){
		$this->_init('ecomwisecredit/limits_customers');
	}
	
	public function deleteByRuleId($rule_id){
		return $this->getResource()->deleteByRuleId($rule_id);
	}	
	
	public function loadByRuleId($rule_id){
		return $this->getResource()->loadByRuleId($rule_id);
	}
	
	public function deleteByCustomerId($customer_id) {
	 	return $this->getResource()->deleteByCustomerId($customer_id);
	}
	 
	public function loadByCustomerId($customer_id) {
		return $this->getResource()->loadByCustomerId($customer_id);
	}
}