<?php

require_once __DIR__.'/abstract.php';

class Mage_Shell_Attributeimport extends Mage_Shell_Abstract
{
    protected $_attribute_with_option_value;
    protected $_attribute;
    protected function _getAttribute()
    {
        if (is_null($this->_attribute_with_option_value)) {
            $this->_log = Mage::getModel('eav/entity_attribute')->loadByCode('catalog_product', $this->_attribute_with_option_value);;
        }
        return $this->_attribute_with_option_value;
    }

    public function run()
    {
        if ($this->getArg('attribute') && $this->getArg('file')) {
            try{
                // need the product typeid to filter the results
                $product = Mage::getModel('catalog/product');
                // build the "query" to get only the attribute we want
                $attributes = Mage::getResourceModel('eav/entity_attribute_collection')
                    ->setEntityTypeFilter($product->getResource()->getTypeId())
                    ->addFieldToFilter('attribute_code', $this->getArg('attribute')) // This can be changed to any attribute code
                    ->load(false);
                // get the first item in the result set.
                $attribute = $attributes->getFirstItem()->setEntity($product->getResource());
                unset($product,$attributes);
                /* @var $attribute Mage_Eav_Model_Entity_Attribute */
                $eoptions = $attribute->getSource()->getAllOptions(false);
                // build existing options array so we can not duplicate the options
                $existing_options=array();
                foreach($eoptions as $opt){
                    $existing_options[trim($opt['label'])] = $opt['value'];
                }
                unset($eoptions);

                $_new_options = file($this->getArg('file'));
                $options = array('value' => array(), 'order' => array(), 'delete' => array());
                $i = 0;
                foreach($_new_options as $option){
                    $option = trim($option);
                    if(!isset($existing_options[$option])){
                        $i++;
                        $options['value']['option_' . $i] = array($option);
                    }
                }
                unset($_new_options,$existing_options);

                if(count($options['value'])>0){
                    $_attribute =  Mage::getModel('eav/entity_attribute')->loadByCode('catalog_product', $this->getArg('attribute'));
                    $_attribute->setOption($options);
                    $_attribute->save();
                    echo "Options successfully imported.n";
                    echo "attribute: ".$this->getArg('attribute')."n";
                    echo "count: ".count($options['value'])."n";
                    unset($_attribute,$options);
                } else {
                    echo "No NEW options to import.n";
                }
            }catch(Exception $e){
                echo "Import Error::".$e->getMessage()."n";
            }
        } else {
            echo $this->usageHelp();
        }
    }

    public function usageHelp()
    {
        return <<<USAGE
Usage:  php -f customimport.php -- [options]
        php -f customimport.php -- --attribute manufacturer --file ../manufacturers.txt

  --attribute <attribute>       name of the attribute to update
  --file <file>                 file path to import from, one value per line
  help                          This help
USAGE;
    }
}

$shell = new Mage_Shell_Attributeimport();
$shell->run();
