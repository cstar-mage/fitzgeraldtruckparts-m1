<?php
$installer = $this;
$installer->startSetup();
$attribute  = array(
        'type'          => 'varchar',
        'backend_type'  => 'varchar',
        'frontend_input' => 'varchar',
        'is_user_defined' => true,
        'label'         => 'Admin Username',
        'visible'       => true,
        'required'      => false,
        'user_defined'  => false,
        'searchable'    => false,
        'filterable'    => false,
        'comparable'    => false,
        'default'       => ''
        );
$installer->addAttribute("order", "admin_username", $attribute);
//$installer->addAttribute("quote", "admin_username", array("type"=>"varchar"));
$installer->endSetup();