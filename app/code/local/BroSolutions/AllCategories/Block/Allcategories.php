<?php

class BroSolutions_AllCategories_Block_AllCategories extends Mage_Core_Block_Template
{
    public function getAllCategories()
    {
        return Mage::getModel('catalog/category')->getCollection()
            ->addAttributeToFilter('is_active', array('eq'=>'1'))
            ->addAttributeToSelect('url_path')
            ->addAttributeToSelect('name');
    }
}
