<?php 
class Ecomwise_Creditlimit_Model_Source_Customergroup
{	
	public function toOptionArray()
	{		
		$customer_groups = Mage::getModel('customer/group')->getCollection();	
		$ret = array();		
		foreach ($customer_groups as $group){			
			$ret[] = array('value'=>$group->getCustomerGroupId(), 'label'=> $group->getCustomerGroupCode());		
		}		
		return $ret;				
	}	
}