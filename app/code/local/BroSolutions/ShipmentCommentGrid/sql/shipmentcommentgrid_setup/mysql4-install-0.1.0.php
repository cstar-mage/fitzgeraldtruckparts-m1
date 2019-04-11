<?php
$installer = new Mage_Sales_Model_Mysql4_Setup('sales_setup');
try
{
    $r = $installer->addAttribute('order', 'ships_from', array
    (
        'type'            => 'int',
        'backend_type'    => 'int',
        'frontend_input'  => 'select',
        'is_user_defined' => true,
        'label'           => 'Ships from',
        'visible'         => true,
        'required'        => false,
        'user_defined'    => false,
        'searchable'      => false,
        'filterable'      => false,
        'comparable'      => false,
        'source_model' => 'shipmentcommentgrid/eav_entity_attribute_source_order_options_shipsfrom'
    ));
}
catch (Exception $ex) {
    //echo '<pre>';
    //print_r($ex);
    //die;
}
$installer->endSetup();
/*
 * <?php
$installer = $this;
$installer->startSetup();

$installer->getConnection()
->addColumn($installer->getTable('sales_flat_order'), 'ships_from', Varien_Db_Ddl_Table::TYPE_INTEGER, 1, array(
'nullable'  => false,
), 'Ships from');
$installer->endSetup();

 */