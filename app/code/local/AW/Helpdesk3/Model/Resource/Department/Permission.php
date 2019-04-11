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


class AW_Helpdesk3_Model_Resource_Department_Permission extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('aw_hdu3/department_permission', 'id');
    }

    /**
     * @param Mage_Core_Model_Abstract $object
     *
     * @return $this|Mage_Core_Model_Resource_Db_Abstract
     */
    protected function _afterSave(Mage_Core_Model_Abstract $object)
    {
        $_result = parent::_afterSave($object);
        if (strlen($object->getAdminRoleIds()) > 0) {
            $object->setAdminRoleIds(array_map('intval', explode(',', $object->getAdminRoleIds())));
        } else {
            $object->setAdminRoleIds(array());
        }
        if (strlen($object->getDepartmentIds()) > 0) {
            $object->setDepartmentIds(array_map('intval', explode(',', $object->getDepartmentIds())));
        } else {
            $object->setDepartmentIds(array());
        }
        return $_result;
    }

    /**
     * @param Mage_Core_Model_Abstract $object
     *
     * @return $this|Mage_Core_Model_Resource_Db_Abstract
     */
    protected function _beforeSave(Mage_Core_Model_Abstract $object)
    {
        if (is_array($object->getAdminRoleIds())) {
            $object->setAdminRoleIds(implode(',', $object->getAdminRoleIds()));
        }
        if (is_array($object->getDepartmentIds())) {
            $object->setDepartmentIds(implode(',', $object->getDepartmentIds()));
        }
        return parent::_beforeSave($object);
    }

    /**
     * @param Mage_Core_Model_Abstract $object
     *
     * @return $this|Mage_Core_Model_Resource_Db_Abstract
     */
    protected function _afterLoad(Mage_Core_Model_Abstract $object)
    {
        if (strlen($object->getAdminRoleIds()) > 0) {
            $object->setAdminRoleIds(array_map('intval', explode(',', $object->getAdminRoleIds())));
        } else {
            $object->setAdminRoleIds(array());
        }
        if (strlen($object->getDepartmentIds()) > 0) {
            $object->setDepartmentIds(array_map('intval', explode(',', $object->getDepartmentIds())));
        } else {
            $object->setDepartmentIds(array());
        }
        return parent::_afterLoad($object);
    }
}
