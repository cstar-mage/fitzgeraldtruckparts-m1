<?php
class Ecomwise_Creditlimit_Block_Credit_Rules_Edit_Tab_Main
    extends Mage_Adminhtml_Block_Widget_Form
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    /**
     * Prepare content for tab
     *
     * @return string
     */
    public function getTabLabel()
    {
        return Mage::helper('ecomwisecredit')->__('Credit Limit');
    }

    /**
     * Prepare title for tab
     *
     * @return string
     */
    public function getTabTitle()
    {
        return Mage::helper('ecomwisecredit')->__('Credit Limit');
    }

    /**
     * Returns status flag about this tab can be showed or not
     *
     * @return true
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * Returns status flag about this tab hidden or not
     *
     * @return true
     */
    public function isHidden()
    {
        return false;
    }

    protected function _prepareForm()
    {
        $model = Mage::registry('creditlimit');

        $form = new Varien_Data_Form();

        $form->setHtmlIdPrefix('rule_');

        $fieldset = $form->addFieldset('base_fieldset',
            array('legend '=> Mage::helper('ecomwisecredit')->__('General Information'))
        );

        $fieldset->addField('auto_apply', 'hidden', array(
            'name' => 'auto_apply',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }
        
        
        $fieldset->addField('amount', 'text', array(
        		'name'      => 'amount',
        		'required'  => true,
        		'class'     => 'validate-not-negative-number',
        		'label'     => Mage::helper('ecomwisecredit')->__('Amount'),
        ));        
       
        $form->setValues($model->getData());       
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
