<?php
class BroSolutions_ProductsAutoAdd_Helper_Data extends Mage_Core_Helper_Abstract
{
    const PRODUCT_AUTO_ADD_URI = 'brosolproductsautoadd/index/index';
    const XML_PATH_FOR_ENABLE_AUTO_ADD_FOR_ONLY_LOGGED_IN = 'brosolproductsautoadd/general/for_logged_in';
    const SESSION_BLOCK_ADD_TO_CART_KEY = 'automatically_add_to_cart_action';
    const SESSION_BLOCK_ADD_TO_CART_EXPIRATION_INTERVAL = 86400;
    protected $_autogenerateErrorsArray = array();
    protected $_shippingPrice = null;

    public function getXmlPathForEnableAutoAddForOnlyLoggedIn(){
        return self::XML_PATH_FOR_ENABLE_AUTO_ADD_FOR_ONLY_LOGGED_IN;
    }

    public function getSessionBlockAddToCartKey()
    {
        return self::SESSION_BLOCK_ADD_TO_CART_KEY;
    }
    public function getSessionBlockAddToCartExpirationInterval()
    {
        return self::SESSION_BLOCK_ADD_TO_CART_EXPIRATION_INTERVAL;
    }

    public function getProductAutoAddUri()
    {
        return self::PRODUCT_AUTO_ADD_URI;
    }

    public function generateAutoAddUrl()
    {
        $productIds = Mage::app()->getRequest()->getParam('product_auto_add_ids');
        $shippingPrice = Mage::app()->getRequest()->getParam('shipping_price');
        if (!empty($productIds) && $productIds) {
            $date = new DateTime();
            $timestamp = $date->getTimestamp();
            $_data = array('product_ids' => $productIds, 'ts' => $timestamp);
            if (!empty($shippingPrice) && $shippingPrice) {
                $_data['sp'] = $shippingPrice;
            }
            $_data = base64_encode(json_encode($_data));
            return Mage::getUrl('brosolproductsautoadd/index/index', array('autoadd' => $_data));
        }
        return false;
    }

    public function isEnableForOnlyLoggedIn()
    {
        return (bool) Mage::getStoreConfig(self::XML_PATH_FOR_ENABLE_AUTO_ADD_FOR_ONLY_LOGGED_IN);
    }

    protected function getAutoAddTimestampFromSession()
    {
        return Mage::getSingleton('core/session')->getAutoAddTimestamp();
    }

    public function addProductsToCart($productIds, $timestamp)
    {
        try {
            if(!empty($productIds)){
                $cart = Mage::getModel('checkout/cart');
                foreach($productIds as $productId){
                    $product = Mage::getModel('catalog/product')->load($productId);
                    $checkingResult = $this->checkIfProductWasAutoAdded($product->getId(), $timestamp);
                    if(!$checkingResult){
                        $cart->addProduct($product, array('qty' => 1));
                    }
                }

                $cookie = Mage::getModel('core/cookie');
                $cookieExists = $cookie->get(self::SESSION_BLOCK_ADD_TO_CART_KEY, true);
                if ($cookieExists) {
                    $cookie->delete(self::SESSION_BLOCK_ADD_TO_CART_KEY);
                }
                $cookie->set(self::SESSION_BLOCK_ADD_TO_CART_KEY, true, self::SESSION_BLOCK_ADD_TO_CART_EXPIRATION_INTERVAL);

                $cart->save();
                $quote = Mage::getSingleton('checkout/session')->getQuote();
                if($quote){
                    $quote->collectTotals();
                }
                Mage::getSingleton('checkout/session')->setCartWasUpdated(true);
                return true;
            }
        } catch (Exception $e){
            Mage::logException($e);
            return $e;
        }
        return false;
    }

    public function checkIfProductWasAutoAdded($candidateProductId, $timestamp)
    {
        $cart = Mage::getModel('checkout/cart');
        if($cart){
            $quote = $cart->getQuote();
            if($quote && $quote->getId()){
                $allItems = $quote->getAllItems();
                foreach($allItems as $item){
                    $autoAddTimestamp = $item->getAutoAddTimestamp();
                    $productId = $item->getProductId();
                    if($autoAddTimestamp == $timestamp && $candidateProductId == $productId){
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public function unsetAutoAddProductIdsInSession()
    {
        Mage::getSingleton('core/session')->unsetData('auto_add_product_ids');
        Mage::getSingleton('core/session')->unsetData('auto_add_timestamp');
        return $this;
    }

    public function checkProductsWasAutoAdded()
    {
        $model = Mage::getModel('core/cookie');
        return (bool)$model->get(self::SESSION_BLOCK_ADD_TO_CART_KEY);
    }

    public function getShippingPrice()
    {
        if ($this->_shippingPrice === null) {
            $cookie = Mage::getModel('core/cookie');
            $cookieExists = $cookie->get(self::SESSION_BLOCK_ADD_TO_CART_KEY);
            $shippingPrice = Mage::getSingleton('core/session')->getAutoAddShippingPrice();
            if ($cookieExists && $shippingPrice) {
                $this->_shippingPrice = $shippingPrice;
            } else {
                $this->_shippingPrice = false;
            }
        }
        return $this->_shippingPrice;
    }
}
