<?php 
class Ecomwise_Creditlimit_Model_Mysql4_Limits_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{

	protected function _construct(){
		parent::_construct();
		$this->_init('ecomwisecredit/limits');
	}
} 