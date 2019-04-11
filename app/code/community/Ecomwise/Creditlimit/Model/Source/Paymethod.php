<?php 
class Ecomwise_Creditlimit_Model_Source_Paymethod
{	
	public function toOptionArray()
	{		
		$payments = Mage::getSingleton('payment/config')->getActiveMethods();
		$payMethods = array();
		foreach ($payments as $paymentCode=>$paymentModel)
		{
			$paymentTitle = Mage::getStoreConfig('payment/'.$paymentCode.'/title');			
			$payMethods[] = array('value'=>$paymentCode, 'label'=> $paymentTitle);		
		}		
		return $payMethods;			
	}	
}