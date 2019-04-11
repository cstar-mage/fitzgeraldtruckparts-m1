<?php
class Ecomwise_Creditlimit_Block_Adminhtml_Creditlimit_Support extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{
	
	protected $_template = 'ecomwisecredit/support.phtml';	
	public $module = 'Ecomwise_Creditlimit';
	public $supportUrl = 'http://support.ecomwise.com/support/home';
	public $email = 'feedback@ecomwise.com';
	public $faq = 'http://support.ecomwise.com/support/solutions/folders/111251';
	public $name = 'Credit Limit';
	public $compatibility = 'Magento CE 1.7.x-1.9.x, Magento EE 1.13-1.14';
	public $manualUrl = 'http://support.ecomwise.com/support/solutions/articles/3000002493-credit-limit';
	
	public function render(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->toHtml();
    }
}  