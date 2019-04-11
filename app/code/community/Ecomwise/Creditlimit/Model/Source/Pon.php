<?php 
class Ecomwise_Creditlimit_Model_Source_Pon
{	
	public function toOptionArray()
	{		
		 return array(
		 	array('value'=>'2', 'label'=>Mage::helper('ecomwisecredit')->__('Enabled and mandatory')),
        	array('value'=>'1', 'label'=>Mage::helper('ecomwisecredit')->__('Enabled')),
            array('value'=>'0', 'label'=>Mage::helper('ecomwisecredit')->__('Disabled')),
        );				
	}	
} 