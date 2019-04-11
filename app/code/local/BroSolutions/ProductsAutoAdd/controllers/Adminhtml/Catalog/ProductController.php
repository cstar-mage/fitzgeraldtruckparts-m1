<?php
require_once(Mage::getModuleDir('controllers','Mage_Adminhtml').DS.'Catalog'.DS.'ProductController.php');
class BroSolutions_ProductsAutoAdd_Adminhtml_Catalog_ProductController extends Mage_Adminhtml_Catalog_ProductController
{
    public function generateaddtocarturlAction()
    {
        $productIds = (array)$this->getRequest()->getParam('product');
        $shippingPrice = $this->getRequest()->getParam('shipping_price');
        //Exclude not simple products
        $autogenerateErrorsArray = array();
        foreach($productIds as $key => $productId){
            $product = Mage::getModel('catalog/product')->load($productId);
            if($product && $product->getId()){
                if($product->getTypeId() !== 'simple'){
                    $autogenerateErrorsArray[] = 'Product with ID '.$productId.' has wrong type';
                    unset($productIds[$key]);
                }
            } else {
                $autogenerateErrorsArray[] = 'Can not add product with ID: '.$productId;
                unset($productIds[$key]);
            }
        }
        if(!empty($autogenerateErrorsArray)){
            Mage::getSingleton('core/session')->addError(implode('. ', $autogenerateErrorsArray));
        }
        $storeId    = (int)$this->getRequest()->getParam('store', 0);
        if($productIds){
            $existingAutoAddIds = $this->getRequest()->getParam('product_auto_add_ids', false);
            if (!$existingAutoAddIds) {
                $_query = array('product_auto_add_ids' => $productIds);
                if ($shippingPrice) {
                    $_query['shipping_price'] = $shippingPrice;
                }
                $this->_redirect('*/*/', array('store' => $storeId, '_query' => $_query));
                return;
            }
        }
        $this->_redirect('*/*/', array('store'=> $storeId));
    }
}