<?php

class BroSolutions_ProductsAutoAdd_Model_Observer
{
    public function addProductsToCart($observer)
    {
        $event = $observer->getEvent();
        if ($event) {
            $customer = $event->getCustomer();
            if ($customer && $customer->getId()) {
                $productIdsStr = $this->_getProductIdsFromSession();
                $helper = Mage::helper('brosolproductsautoadd');
                if ($productIdsStr && !empty($productIdsStr)) {
                    $productIds = explode('|', $productIdsStr);
                    $productIds = array_unique($productIds);
                    $timestamp = $this->_getUrlTimestampFromSession();
                    $result = $helper->addProductsToCart($productIds, $timestamp);
                    if ($result === true) {
                        $helper->unsetAutoAddProductIdsInSession();
                        $url = Mage::getUrl('checkout/cart');
                        $response = Mage::app()->getFrontController()->getResponse();
                        $response->setRedirect($url);
                        $response->sendResponse();
                        exit;
                    }
                }
            }
        }
        return $this;
    }

    protected function _getProductIdsFromSession()
    {
        return Mage::getSingleton('core/session')->getAutoAddProductIds();
    }

    protected function _getUrlTimestampFromSession()
    {
        return Mage::getSingleton('core/session')->getAutoAddTimestamp();
    }

    protected function _getShippingPriceFromSession()
    {
        return Mage::getSingleton('core/session')->getAutoAddShippingPrice();
    }

    public function addProductToCartAfter($observer)
    {
        $quoteItem = $observer->getEvent()->getQuoteItem();
        $timestamp = $this->_getUrlTimestampFromSession();
        $quoteItem->setAutoAddTimestamp($timestamp);
        return $this;
    }

    public function checkoutSuccessAction()
    {
        $cookie = Mage::getModel('core/cookie');
        $helper = Mage::helper('brosolproductsautoadd');
        $cookie->delete($helper->getSessionBlockAddToCartKey());
    }
}