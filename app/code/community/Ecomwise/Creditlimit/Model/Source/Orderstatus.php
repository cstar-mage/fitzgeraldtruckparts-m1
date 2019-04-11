<?php
class Ecomwise_Creditlimit_Model_Source_Orderstatus {
	
	public function toOptionArray()
	{
		$customer_groups = Mage::getModel('customer/group')->getCollection();		
		$order_statuses =  Mage::getModel('sales/order_status')->getResourceCollection();	
		$ret = array();
		$ret[] = array('value'=>'', 'label'=> '');
		foreach ($order_statuses as $status){
			$ret[] = array('value'=>$status->getStatus(), 'label'=> $status->getLabel());
		}
		return $ret;
	}		
}
