<?php
class BroSolutions_ProductsAutoAdd_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $params = $this->getRequest()->getParam('autoadd', false);
        if($params){
            try{
                $params = json_decode(base64_decode($params),true);
            } catch (Exception $exception){
                $this->norouteAction();
                return;
            }
        }
        $productIds = $params['product_ids'];
        $timestamp = $params['ts'];
        $shippingPrice = !empty($params['sp']) ? $params['sp'] : false;

        if($productIds && !empty($productIds)){
            $session = $this->_getSession();
            if (!empty($shippingPrice) && $shippingPrice) {
                $session->setData('auto_add_shipping_price', $shippingPrice);
            }

            if($this->_isEnableForOnlyLoggedIn() && !Mage::getSingleton('customer/session')->isLoggedIn()){
                $session->setData('auto_add_product_ids', implode('|', $productIds));
                $session->setData('auto_add_timestamp', $timestamp);
                Mage::getSingleton('core/session')->addError('Please login first');
                $this->_redirect('customer/account/login');
                return;
            } else {
                $session->setData('auto_add_timestamp', $timestamp);
                $result = Mage::helper('brosolproductsautoadd')->addProductsToCart($productIds, $timestamp);
                if($result instanceof Exception){
                    Mage::getSingleton('core/session')->addError($result->getMessage());
                }
            }
            $this->_redirect('checkout/cart/index');
            return;
        }
        $this->norouteAction();
        return;
    }

    protected function _isEnableForOnlyLoggedIn()
    {
        return Mage::helper('brosolproductsautoadd')->isEnableForOnlyLoggedIn();
    }

    protected function _getSession()
    {
        return Mage::getSingleton('core/session');
    }
}