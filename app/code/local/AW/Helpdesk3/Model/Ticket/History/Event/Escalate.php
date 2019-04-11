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


class AW_Helpdesk3_Model_Ticket_History_Event_Escalate extends AW_Helpdesk3_Model_Ticket_History_Event_Message
{
    const TYPE = 3;

    public function getType()
    {
        return self::TYPE;
    }

    public function isSystem()
    {
        return false;
    }

    protected function _sendNotification($history)
    {
        $ticket = $history->getTicket();
        if (Mage::helper('aw_hdu3/config')->isAllowTicketEscalation($ticket->getStoreId())) {
            $notification = $history->getTicket()->getDepartment()->getEmailNotification();
            $notification->sendToAdminNotificationEscalate($history);
        }
        return $this;
    }
}