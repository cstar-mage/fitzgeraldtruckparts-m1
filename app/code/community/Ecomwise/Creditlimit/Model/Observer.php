<?php 
class Ecomwise_Creditlimit_Model_Observer extends Varien_Object
{
	public function changeMethodTemplate($observer){
	
		$_block = $observer->getBlock();
		
		$_type = $_block->getType();
		
		if ($_block instanceof Mage_Adminhtml_Block_Sales_Order_Create_Billing_Method_Form) {
			$_block->setTemplate('ecomwisecredit/billing/method/form.phtml');
		}
		
	}
	
	public function changeTemplate($observer){
	
		$_block = $observer->getBlock();
			
		$template_path = explode('/', $_block->getTemplateFile());
		$templateFile = count($template_path) > 1 ? array_pop($template_path) : "";
		$templateDir = count($template_path) > 1 ? array_pop($template_path) : "";
		$template = $templateDir."/".$templateFile;
		if ($_block instanceof Mage_Checkout_Block_Onepage_Payment_Methods) {
			if($template == "onestepcheckout/payment_method.phtml"){
				$_block->setTemplate('ecomwisecredit/osc/fix.phtml');
			}
		}	
	}
}