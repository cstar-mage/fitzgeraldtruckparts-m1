<?php

class BroSolutions_SmartSlides_Model_Resource_Smartslidesgroups extends Mage_Core_Model_Mysql4_Abstract
{

    protected function _construct()
    {
        $this->_init('smartslides/smartslidesgroups', 'entity_id');
    }
}