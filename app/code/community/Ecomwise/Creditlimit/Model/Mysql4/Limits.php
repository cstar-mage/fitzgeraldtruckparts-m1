<?php
class Ecomwise_Creditlimit_Model_Mysql4_Limits extends Mage_Core_Model_Mysql4_Abstract {

	protected function _construct(){
		$this->_init('ecomwisecredit/creditlimits', 'id');
	}	
} 