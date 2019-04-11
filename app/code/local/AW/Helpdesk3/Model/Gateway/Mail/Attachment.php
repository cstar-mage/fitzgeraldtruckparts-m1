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


/**
 * Class AW_Helpdesk3_Model_Gateway_Mail_Attachment
 * @method string getId()
 * @method string getMailboxId()
 * @method string getFileName()
 * @method string getFileRealName()
 */
class AW_Helpdesk3_Model_Gateway_Mail_Attachment extends AW_Helpdesk3_Model_Attachment_Abstract
{
    const MAIN_FOLDER = 'mail';

    public function _construct()
    {
        parent::_construct();
        $this->_init('aw_hdu3/gateway_mail_attachment');
    }

    protected function _getFilePath()
    {
        return self::MAIN_FOLDER . DS . $this->getMailboxId();
    }
}