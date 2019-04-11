<?php
class Ecomwise_Creditlimit_Block_Adminhtml_Creditlimit_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
	
    protected function _prepareForm()
    {

        $form = new Varien_Data_Form();
      
        echo Mage::app()->getLayout()->createBlock('ecomwisecredit/adminhtml_creditlimit_support')->setTemplate('ecomwisecredit/support.phtml')->toHtml();        
                
        return parent::_prepareForm();
    }
}  