<?php
/**
 * Created by PhpStorm.
 * User: DEV5
 * Date: 04.10.2017
 * Time: 14:50
 */

class BroSolutions_ShipmentCommentGrid_Helper_ShipsFrom extends Mage_Core_Helper_Abstract
{
    const REFRESH_SHIPS_FROM_URL = 'adminhtml/shipmentcommentgrid/index';

    /**
     * @return string
     */
    public function getUrl()
    {
        return self::REFRESH_SHIPS_FROM_URL;
    }

    /**
     * @return array
     */
    public function getShipsFromOptions()
    {
        return Mage::getModel('shipmentcommentgrid/eav_entity_attribute_source_order_options_shipsfrom')->getAllOptions();
    }

    /**
     * @param $id
     * @return integer
     */
    public function getOrderShipsFrom($id)
    {
        return Mage::getModel('sales/order')->load($id)->getShipsFrom();
    }

    /**
     * @param $value
     * @param $shipsFrom
     * @return string
     */
    public function getSelectedAttribute($value, $shipsFrom)
    {
        if ($value == $shipsFrom) {
            return 'selected';
        }

        return '';
    }
}
