<?php
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$attribute_id = $setup->getAttribute(
		'customer',
		'credit_limit',
		'attribute_id'
);

$resource = Mage::getSingleton('core/resource');
$cr = Mage::getSingleton('core/resource')->getConnection('core_read');
$cw = Mage::getSingleton('core/resource')->getConnection('core_write');

$table = $resource->getTableName('customer_entity_int');
$rows = $cw->fetchAll('Select `entity_id`, `value` from `'.$table.'` where `attribute_id` = "'.$attribute_id.'"');

foreach($rows as $row){
	if($row['value'] > 0){
		$this->run("INSERT INTO {$this->getTable('ecomwise_credit_limit')} (`amount`) VALUES (".$row['value'].");");
		$this->run("INSERT INTO {$this->getTable('ecomwise_credit_limit_customers')} (`rule_id`, `customer_id`) Select MAX(id),".$row['entity_id']." FROM `ecomwise_credit_limit`");
	}
}

$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "credit_limit");
$used_in_forms=array();
$attribute->setData("used_in_forms", $used_in_forms);
//->setData("is_visible", 0);
$attribute->save();

$this->endSetup();