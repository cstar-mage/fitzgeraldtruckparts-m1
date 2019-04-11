<?php

class BroSolutions_SmartSlides_Block_Slides extends Mage_Core_Block_Template
{
    protected $_sliderGroup = NULL;
    protected $_sliderGroupId = NULL;
    public function setSliderGroup(BroSolutions_SmartSlides_Model_Smartslidesgroups $group)
    {
        $this->_sliderGroup = $group;
    }

    protected function _toHtml()
    {
        $html = '';
        if($this->_sliderGroup){
            $this->setTemplate('bro_solutions/smart_slides/slides.phtml');
            $html = parent::_toHtml();
        } else if($this->_sliderGroupId){
            $sliderGroupInstance = $this->getSlidesGroup();
            if($sliderGroupInstance){
                $this->setTemplate('bro_solutions/smart_slides/slides.phtml');
                $html = parent::_toHtml();
            }
        }
        return $html;
    }

    public function getSlidesGroup()
    {
        if($this->_sliderGroup){
            return $this->_sliderGroup;
        }
        if($this->_sliderGroupId){
            $groupInstance = Mage::getModel('smartslides/smartslidesgroups')->load($this->_sliderGroupId);
            if($groupInstance){
                $this->_sliderGroup = $groupInstance;
                return $groupInstance;
            }
        }
        return false;
    }



    public function setSliderGroupId($groupId)
    {
        $this->_sliderGroupId = $groupId;
        $this->getSlidesGroup();
        return $this;
    }

    public function getSlidesCollection()
    {
        $collection = new Varien_Object();
        if($this->_sliderGroup){
            $slidesIdsStr = $this->_sliderGroup->getSlidesIds();
            $slidesIds = unserialize($slidesIdsStr);
            $collection = Mage::getModel('smartslides/smartslides')->getCollection()
                ->addFieldToFilter('entity_id', array('in' => $slidesIds))
                ->addFieldToFilter('status', array('eq' => 1));
        }
        return $collection;
    }

    public function getSlidesGroupJsonConfig()
    {
        $groupData = $this->getSlidesGroup()->getData();
        //... data conversion
        $groupData['effect'] = (bool)$groupData['effect'];
        $groupData['auto_play'] = (bool)$groupData['auto_play'];
        $groupData['is_arrows_enabled'] = (bool)$groupData['is_arrows_enabled'];
        $groupData['is_dots_enabled'] = (bool)$groupData['is_dots_enabled'];
        $groupData['pause_on_hower'] = (bool)$groupData['pause_on_hower'];
        $groupData['slide_type'] = (bool)$groupData['slide_type'];

        return json_encode($groupData);
    }

    public function getSliderGroupId()
    {
        $sliderGroup = $this->getSlidesGroup();
        if($sliderGroup){
            return $sliderGroup->getId();
        }
        return false;
    }

}