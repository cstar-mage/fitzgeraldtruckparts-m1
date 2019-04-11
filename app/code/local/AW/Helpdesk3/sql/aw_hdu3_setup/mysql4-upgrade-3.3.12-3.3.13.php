<?php

$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();
$tableName = $installer->getTable('aw_hdu3/ticket');
$columnName = 'comment';
if ($connection->tableColumnExists($tableName, $columnName) === false) {
    $connection->addColumn($tableName, $columnName, 'text');
}
$connection->endSetup();

