<?php

$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();
$tableName = $installer->getTable('aw_hdu3/ticket');
$columnName = 'product_sku';

if ($connection->tableColumnExists($tableName, $columnName) === false) {
    $connection->addColumn($tableName, $columnName, 'varchar(255)');
}
$connection->endSetup();
