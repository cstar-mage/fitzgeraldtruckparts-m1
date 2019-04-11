<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/AW-LICENSE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. aheadWorks does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Helpdesk3
 * @version    3.3.10
 * @copyright  Copyright (c) 2010-2012 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/AW-LICENSE.txt
 */


class AW_Helpdesk3_Block_Adminhtml_Ticket_Edit_Popup_Order extends Mage_Adminhtml_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('aw_hdu3/ticket/edit/popup/order.phtml');
    }

    /**
     * @return AW_Helpdesk3_Model_Ticket
     */
    public function getTicket()
    {
        return Mage::registry('current_ticket');
    }

    /**
     * @return array
     */
    public function getOrderOptionHash()
    {
        $collection = Mage::getModel('sales/order')->getCollection();
        $collection->addFieldToFilter('customer_email', $this->getTicket()->getCustomerEmail());
        $result = array('' => $this->__('Unassigned'));
        foreach ($collection as $order) {
            /** @var Mage_Sales_Model_Order $order */
            $result[$order->getId()] = $order->getIncrementId();
            $result[$order->getId()] .= ', ' . $this->formatDate($order->getCreatedAtStoreDate());
            $result[$order->getId()] .= ', ' . $order->formatPrice($order->getGrandTotal());
        }
        return $result;
    }

}

