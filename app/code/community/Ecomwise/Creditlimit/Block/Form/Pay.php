<?php 
class Ecomwise_Creditlimit_Block_Form_Pay extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('ecomwisecredit/form/pay.phtml');
    }

}
