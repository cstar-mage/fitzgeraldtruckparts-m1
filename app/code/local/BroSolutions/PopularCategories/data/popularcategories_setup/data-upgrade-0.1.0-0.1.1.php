<?php
$installer = $this;
$installer->startSetup();

$data = file_get_contents('app/code/local/BroSolutions/PopularCategories/data/popularcategories_setup/cms_block.sql');
$installer->run($data);
$installer->endSetup();
