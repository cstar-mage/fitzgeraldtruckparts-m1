<?php
class BroSolutions_Rewrites_Block_Catalog_Product_View extends Mage_Catalog_Block_Product_View
{
    const CATEGORY_ENGINE_ID = 86;
    const DETROIT_WARRANTY_CMS_BLOCK_IDENTIFIER = 'detroit_warranty_block_product_page';
    const WARRANTY_CMS_BLOCK_IDENTIFIER = 'warranty_block_product_page';
    public function isProductEngine($product = NULL)
    {
        if($product === NULL){
            $product = $this->getProduct();
        }
        $categories = $product->getCategoryIds();
        if(in_array(self::CATEGORY_ENGINE_ID, $categories) !== false){
            return true;
        }
        return false;
    }



    public function getWarrantyLabel($product = NULL)
    {
        $label = '';
        if($product === NULL){
            $product = $this->getProduct();
        }
        if($this->isProductEngine($product)){
            $manufacturer = $product->getManufacturer();
            $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','manufacturer');
            $attribute = Mage::getModel('catalog/resource_eav_attribute')->load($attributeId);
            $attributeOptions = $attribute->getSource()->getAllOptions();
            $manufacturerIsDetroit = false;
            $manufacturerLabel = '';
            foreach($attributeOptions as $option){
                if(isset($option['value']) && $option['value'] == $manufacturer){
                    $manufacturerLabel = $option['label'];
                    if(strpos(strtolower($option['label']), 'detroit') !== false){
                        $manufacturerIsDetroit = true;
                        break;
                    }
                }
            }
            if($manufacturerIsDetroit){
                $label = $this->getDetroitManufacturerCmsBlockHtml();
            } else {
                $label = $this->getManufacturerCmsBlockHtml($manufacturerLabel);
            }
        }
        return $label;
    }

    public function getDetroitManufacturerCmsBlockHtml()
    {
        return $this->getLayout()->createBlock('cms/block')->setBlockId(self::DETROIT_WARRANTY_CMS_BLOCK_IDENTIFIER)->toHtml();
    }

    public function getManufacturerCmsBlockHtml($manufacturerLabel)
    {
        $html = $this->getLayout()->createBlock('cms/block')->setBlockId(self::WARRANTY_CMS_BLOCK_IDENTIFIER)->toHtml();
        $html = str_replace('[manufacturer]', $manufacturerLabel, $html);
        return $html;
    }
}
