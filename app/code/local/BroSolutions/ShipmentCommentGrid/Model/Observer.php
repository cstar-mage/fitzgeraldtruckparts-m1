<?php
/**
 * Created by PhpStorm.
 * User: DEV5
 * Date: 05.10.2017
 * Time: 18:38
 */

class BroSolutions_ShipmentCommentGrid_Model_Observer
{
    public function saveShipsFrom(Varien_Event_Observer $observer)
    {
        $order = $observer->getOrder();
        if ($this->getShipsFromField()) {
            $order->setShipsFrom(Mage::app()->getRequest()->getParam('ships_from'));
        }
    }

    protected function getShipsFromField()
    {
        return Mage::app()->getRequest()->getParam('ships_from');
    }
}
