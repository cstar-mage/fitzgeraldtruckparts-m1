<?php
/**
 * Created by PhpStorm.
 * User: DEV5
 * Date: 29.05.2017
 * Time: 16:11
 */
class BroSolutions_PopularCategories_Block_Popularcategory extends Mage_Core_Block_Template
{
    const SUBCATEGORIES_LIMIT = 3;
    /**
     * return array()
     */
    public function getPopularCategories()
    {
        /** @var Mage_Catalog_Model_Resource_Category_Collection $collection */
        $collection = Mage::getModel('catalog/category')->getCollection();
        $collection->addAttributeToSelect('image')
            ->addAttributeToSelect('name')
            ->addAttributeToSelect('url_path')
            ->addAttributeToFilter('popular', ['eq'=>'1'])
            ->addAttributeToFilter('is_active', ['eq'=>'1']);

        return $collection;
    }

    /**
     * @param $parentId
     * return array()
     */
    public function getSubCat($parentId)
    {
        $children = Mage::getModel('catalog/category')->load($parentId)->getChildren();
        /** @var Mage_Catalog_Model_Resource_Category_Collection $collection */
        $collection = Mage::getModel('catalog/category')->getCollection()
            ->addAttributeToSelect('name')
            ->addAttributeToSelect('url_path')
            ->addAttributeToFilter('is_active', ['eq'=>'1'])
            ->addAttributeToFilter('entity_id', ['in' => explode(',', $children)]);

        $collection->getSelect()->limit(self::SUBCATEGORIES_LIMIT);

        return $collection;
    }
}