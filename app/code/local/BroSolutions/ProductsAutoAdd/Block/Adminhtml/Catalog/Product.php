<?php
class BroSolutions_ProductsAutoAdd_Block_Adminhtml_Catalog_Product extends Mage_Adminhtml_Block_Catalog_Product
{
    protected $_errorsStr = '';
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('brosolproductsautoadd/catalog/product.phtml');
    }

    public function getAutoAddUrl()
    {
        return Mage::helper('brosolproductsautoadd')->generateAutoAddUrl();
    }

    public function getProductListUrl()
    {
        return Mage::helper("adminhtml")->getUrl("adminhtml/catalog_product/index/");
    }
}