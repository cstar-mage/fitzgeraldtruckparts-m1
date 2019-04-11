<?php
$installer = $this;
$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('sales/quote_item'), 'auto_add_timestamp', "varchar(255) null default 0");
$installer->endSetup();