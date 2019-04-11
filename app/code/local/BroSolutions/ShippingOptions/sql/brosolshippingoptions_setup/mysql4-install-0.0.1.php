<?php
$installer = $this;
$installer->startSetup();
$quoteTableName = $installer->getTable('sales_flat_quote');
$orderTableName = $installer->getTable('sales_flat_order');
$installer->run("
ALTER TABLE `{$quoteTableName}`
ADD `local_pickup_option` INT (10) DEFAULT NULL;
");
$installer->run("
ALTER TABLE `{$orderTableName}`
ADD `local_pickup_option` INT (10) DEFAULT NULL;
");
$installer->endSetup();


