<?php
class Ecomwise_Creditlimit_Model_Mysql4_Limits_Customers extends Mage_Core_Model_Mysql4_Abstract {

	protected function _construct(){
		$this->_init('ecomwisecredit/creditlimits_customers', 'id');
	}	
	
	public function deleteByRuleId($rule_id)
	{
		$table = $this->getMainTable();
		$where = array();
		$where[] =  $this->_getWriteAdapter()->quoteInto('rule_id = ?',$rule_id);
		$result = $this->_getWriteAdapter()->delete($table,$where);
		return $result;
	}
	
	public function loadByRuleId($rule_id)
	{
		$table = $this->getMainTable();		
		$where = $this->_getReadAdapter()->quoteInto('rule_id = ?',$rule_id);
        $select = $this->_getReadAdapter()->select()->from($table,array('customer_id'))->where($where);                
        $result = $this->_getReadAdapter()->fetchOne($select);        		
		return $result;
	}
	
	public function deleteByCustomerId($customer_id)
	{
		$table = $this->getMainTable();
		$where = array();
		$where[] =  $this->_getWriteAdapter()->quoteInto('customer_id = ?',$customer_id);
		$result = $this->_getWriteAdapter()->delete($table,$where);
		return $result;
	}
	
	
	public function loadByCustomerId($customer_id)
	{	
		
		try{
			$model = Mage::getModel('ecomwisecredit/limits_customers');
			$read = $this->_getReadAdapter();
			$table = $this->getMainTable();
		
			$query = $read->select()
			->from($table)
			->where('customer_id=?', $customer_id);
				
			$result = $read->fetchRow($query);
		}catch(Exception $ex){
			return false;
		}
		
		if($result){
			$model->load($result['id']);			
		}
		return $model;
	}
	
} 