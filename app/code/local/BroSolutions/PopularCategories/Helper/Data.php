<?php
class BroSolutions_PopularCategories_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getHtmlLinks ($_links)
    {
        $html = "";
        foreach($_links as $_link){
             if ($_link->getTitle() == 'Log In' || $_link->getTitle() == 'Log Out'){
                 $html .=  '<span><a href="' . $_link->getUrl() . '" title="' . $_link->getTitle() . '"' .  $_link->getAParams() . '>' .  $_link->getLabel() . '</a></span>';
             } elseif (Mage::helper('customer')->isLoggedIn() && $_link->getTitle() == 'My Account') {
                 $html .= '<span><a href="' . $_link->getUrl() . '" title="' . $_link->getTitle() . '"' .  $_link->getAParams() . '>' .  $_link->getLabel() . '</a></span>/';
             }
        }
        return $html;
    }
}