<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute("catalog_category", "popular",  array(
    "type"     => "int",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Popular Category",
    "input"    => "select",
    "class"    => "",
    "source"   => "eav/entity_attribute_source_boolean",
    "global"   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    "visible"  => true,
    "required" => false,
    "user_defined"  => false,
    "default" => "0",
    "searchable" => false,
    "filterable" => false,
    "comparable" => false,
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""
	));
$installer->endSetup();
