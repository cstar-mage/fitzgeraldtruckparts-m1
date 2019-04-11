<?php


class BroSolutions_Rewrites_Model_Sales_Order_Pdf_Items_Invoice_Default extends Mage_Sales_Model_Order_Pdf_Items_Invoice_Default
{
    private $_products = array();

    public function getProduct($productId){
        if(empty($this->_products[$productId])){
            $this->_products[$productId] = Mage::getModel('catalog/product')->load($productId);
        }
        return  $this->_products[$productId];
    }

    public function getItemPricesForDisplay()
    {
        $order = $this->getOrder();
        $item  = $this->getItem();

        /** @var OrganicInternet_SimpleConfigurableProducts_Catalog_Model_Product $_product */
        $_product = $this->getProduct($item->getProductId());


        if (Mage::helper('tax')->displaySalesBothPrices()) {
            $prices = array(
                array(
                    'label'    => Mage::helper('tax')->__('Excl. Tax') . ':',
                    'price'    => $order->formatPriceTxt($item->getPrice()),
                    'subtotal' => $order->formatPriceTxt($item->getRowTotal())
                ),
                array(
                    'label'    => Mage::helper('tax')->__('Incl. Tax') . ':',
                    'price'    => $order->formatPriceTxt($item->getPriceInclTax()),
                    'subtotal' => $order->formatPriceTxt($item->getRowTotalInclTax())
                ),
            );
        } elseif (Mage::helper('tax')->displaySalesPriceInclTax()) {
            $prices = array(array(
                'price' => $order->formatPriceTxt($item->getPriceInclTax()),
                'subtotal' => $order->formatPriceTxt($item->getRowTotalInclTax()),
            ));
        } elseif ($_product->getCoreCharge()) {
            $prices = array(
                array(
                    'price' => $order->formatPriceTxt($item->getPrice() - $_product->getCoreChargePrice()),
                    'core_charge_price' => $order->formatPriceTxt($_product->getCoreChargePrice()),
                    'subtotal' => $order->formatPriceTxt($item->getRowTotal())
                )
            );
        } else {
            $prices = array(array(
                'price' => $order->formatPriceTxt($item->getPrice()),
                'subtotal' => $order->formatPriceTxt($item->getRowTotal()),
            ));
        }
        return $prices;
    }



    public function draw()
    {
        $order  = $this->getOrder();
        $item   = $this->getItem();
        $pdf    = $this->getPdf();
        $page   = $this->getPage();
        /** @var OrganicInternet_SimpleConfigurableProducts_Catalog_Model_Product $_product */
        $_product = $this->getProduct($item->getProductId());
        $lines  = array();

        // draw Product name
        $drawProductName =  Mage::helper('core/string')->str_split($item->getName(), 35, true, true);
        if ($_product->getCoreCharge()) {
            $drawProductName[] =  'Core charge for this product is';
        }
        $lines[0] = array(array(
            'text' => $drawProductName,
            'feed' => 35,
        ));

        // draw SKU
        $lines[0][] = array(
            'text'  => Mage::helper('core/string')->str_split($this->getSku($item), 17),
            'feed'  => 290,
            'align' => 'right'
        );

        // draw QTY
        $lines[0][] = array(
            'text'  => $item->getQty() * 1,
            'feed'  => 435,
            'align' => 'right'
        );

        // draw item Prices
        $i = 0;
        $prices = $this->getItemPricesForDisplay();
        $feedPrice = 395;
        $feedSubtotal = $feedPrice + 170;
        foreach ($prices as $priceData){
            if (isset($priceData['label'])) {
                // draw Price label
                $lines[$i][] = array(
                    'text'  => $priceData['label'],
                    'feed'  => $feedPrice,
                    'align' => 'right'
                );

                // draw Subtotal label
                $lines[$i][] = array(
                    'text'  => $priceData['label'],
                    'feed'  => $feedSubtotal,
                    'align' => 'right'
                );
                $i++;
            }

            $text = array($priceData['price']);
            if (!empty($priceData['core_charge_price'])) {
                $text[] = $priceData['core_charge_price'];
            }

            $lines[$i][] = array(
                'text' => $text,
                'feed' => $feedPrice,
                'font' => 'bold',
                'align' => 'right'
            );


            // draw Subtotal
            $lines[$i][] = array(
                'text'  => $priceData['subtotal'],
                'feed'  => $feedSubtotal,
                'font'  => 'bold',
                'align' => 'right'
            );
            $i++;
        }

        // draw Tax
        $lines[0][] = array(
            'text'  => $order->formatPriceTxt($item->getTaxAmount()),
            'feed'  => 495,
            'font'  => 'bold',
            'align' => 'right'
        );

        // custom options
        $options = $this->getItemOptions();
        if ($options) {
            foreach ($options as $option) {
                // draw options label
                $lines[][] = array(
                    'text' => Mage::helper('core/string')->str_split(strip_tags($option['label']), 40, true, true),
                    'font' => 'italic',
                    'feed' => 35
                );

                if ($option['value']) {
                    if (isset($option['print_value'])) {
                        $_printValue = $option['print_value'];
                    } else {
                        $_printValue = strip_tags($option['value']);
                    }
                    $values = explode(', ', $_printValue);
                    foreach ($values as $value) {
                        $lines[][] = array(
                            'text' => Mage::helper('core/string')->str_split($value, 30, true, true),
                            'feed' => 40
                        );
                    }
                }
            }
        }

        $lineBlock = array(
            'lines'  => $lines,
            'height' => 20
        );

        $page = $pdf->drawLineBlocks($page, array($lineBlock), array('table_header' => true));
        $this->setPage($page);
    }

}