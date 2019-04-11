<?php

class BroSolutions_SmartSlides_Model_Smartslidesgroups extends Mage_Core_Model_Abstract
{
    const DEFAULT_AUTO_PLAY_SPEED = 2000;

    protected function _construct()
    {
        $this->_init('smartslides/smartslidesgroups');
    }

    public function getOptionalArray()
    {
        $res = array();
        $groupsCollection = $this->getCollection();
        foreach($groupsCollection as $group){
            $res[$group->getEntityId()] = $group->getName();
        }
        return $res;
    }

    public function addSlideById($slideId)
    {
        $slideModel = Mage::getModel('smartslides/smartslides');
        if($this->getEntityId() && $slideModel->checkIfSlideExists($slideId)){
            $slidesData = $this->getSlidesIds();
            $slidesIds = array();
            if(!empty($slidesData)){
                $slidesIds = unserialize($slidesData);
                if(array_search($slideId, $slidesIds) === false){
                    $slidesIds[] = $slideId;
                    $this->setSlidesIds(serialize($slidesIds));
                    $this->save();
                }
            }
        }
    }

    public function getAutoPlayJs()
    {
        $isAutoPlay = $this->getAutoPlay();
        if($isAutoPlay){
            return 'true';
        }
        return 'false';
    }


    public function getAnimateSpeedJs()
    {
        $autoPlaySpeed = $this->getAnimateSpeed();
        if(!$autoPlaySpeed){
            return self::DEFAULT_AUTO_PLAY_SPEED;
        }
        return $autoPlaySpeed;
    }
    public function getIsArrowsJs()
    {
        $isArrows = $this->getIsArrowsEnabled();
        if($isArrows){
            return 'true';
        }
        return 'false';
    }
    public function getIsDotsJs()
    {
        $isDots = $this->getIsDotsEnabled();
        if($isDots){
            return 'true';
        }
        return 'false';
    }
}