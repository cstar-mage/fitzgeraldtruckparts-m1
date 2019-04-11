<?php

$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();
$tableName = $installer->getTable('aw_hdu3/ticket');
$columnNames = array('telephone', 'street_1', 'street_2', 'region_id', 'postcode', 'country_id');
foreach($columnNames as $columnName){
    if ($connection->tableColumnExists($tableName, $columnName) === false) {
        $connection->addColumn($tableName, $columnName, 'varchar(255)');
    }
}
$connection->endSetup();
