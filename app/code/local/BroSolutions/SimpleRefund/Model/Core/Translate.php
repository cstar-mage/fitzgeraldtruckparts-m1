<?php
class BroSolutions_SimpleRefund_Model_Core_Translate extends Mage_Core_Model_Translate
{
    public function getTemplateFile($file, $type, $localeCode=null)
    {
        if (is_null($localeCode) || preg_match('/[^a-zA-Z_]/', $localeCode)) {
            $localeCode = $this->getLocale();
        }
        // Retrieve template from the current design package
        $designPackage = Mage::getModel('core/design_package');
        $filePath = Mage::getBaseDir('design')  . DS . 'frontend' . DS
            . $designPackage->getPackageName() . DS . 'default' . DS . 'locale' . DS
            . $localeCode . DS . 'template' . DS . $type . DS . $file;

        if (!file_exists($filePath)) { // If no template for current design package, use default workflow
            return parent::getTemplateFile($file, $type, $localeCode);
        }
        $ioAdapter = new Varien_Io_File();
        $ioAdapter->open(array('path' => Mage::getBaseDir('locale')));
        return (string) $ioAdapter->read($filePath);
    }
}