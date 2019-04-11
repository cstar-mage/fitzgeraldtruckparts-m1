<?php


class BroSolutions_Rewrites_Model_Sales_Order_Pdf_Invoice extends Mage_Sales_Model_Order_Pdf_Invoice
{

    public function getPdf($invoices = array())
    {
        $this->_beforeGetPdf();
        $this->_initRenderer('invoice');

        $pdf = new Zend_Pdf();
        $this->_setPdf($pdf);
        $style = new Zend_Pdf_Style();
        $this->_setFontBold($style, 10);

        foreach ($invoices as $invoice) {
            if ($invoice->getStoreId()) {
                Mage::app()->getLocale()->emulate($invoice->getStoreId());
                Mage::app()->setCurrentStore($invoice->getStoreId());
            }
            $page = $this->newPage();
            $order = $invoice->getOrder();
            /* Add image */
            $this->insertLogo($page, $invoice->getStore());
            /* Add address */
            $this->insertAddress($page, $invoice->getStore());
            /* Add head */
            $this->insertOrder(
                $page,
                $order,
                Mage::getStoreConfigFlag(self::XML_PATH_SALES_PDF_INVOICE_PUT_ORDER_ID, $order->getStoreId())
            );
            /* Add document text and number */
            $this->insertDocumentNumber(
                $page,
                Mage::helper('sales')->__('Invoice # ') . $invoice->getIncrementId()
            );
            /* Add table */
            $this->_drawHeader($page);
            /* Add body */
            foreach ($invoice->getAllItems() as $item) {
                if ($item->getOrderItem()->getParentItem()) {
                    continue;
                }
                /* Draw item */
                $this->_drawItem($item, $page, $order);
                $page = end($pdf->pages);
            }
            /* Add totals */
            $this->insertTotals($page, $invoice);
            if ($invoice->getStoreId()) {
                Mage::app()->getLocale()->revert();
            }

            $this->insertTermsAndConditions($page);
        }
        $this->_afterGetPdf();
        return $pdf;
    }

    public function insertTermsAndConditions($page)
    {
        $text = 'Any warranties on the product(s) you (“Customer”) are purchasing are those made by the manufacturer(s).
        FITZGERALD TRUCK PARTS ONLINE LLC ("FTPO") DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, WITHOUT
        LIMITATION, ANY IMPLIED WARRANTY OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. FTPO neither assumes
        nor authorizes any other person to assume for it any liability in connection with the product(s) sold. In no
        event will FTPO be liable for any incidental, consequential, indirect or special damages or commercial loss
        arising out of this transaction. All claims for returned merchandise must be accompanied by a sales receipt
        within thirty (30) days after purchase. Customer will be responsible for return shipping cost. This agreement
        will be governed by and construed in accordance with the laws of the State of Tennessee, without regard to the
        conflicts of law rules of such state. The state or federal courts within the State of Tennessee shall have
        exclusive jurisdiction over FTPO and Customer with respect to any dispute or controversy between them arising
        under or in connection with this transaction, and Customer submits to the exclusive jurisdiction of those courts
        and waives any objections to such jurisdiction on the grounds of venue or forum non conveniens.';

        $text = explode("\n", $text);
        foreach ($text as $key => $item) {
            $text[$key] = trim($item);
        }

        $lineBlock = array(
            'lines' => array(
                array(
                    array(
                        'text' => $text,
                        'feed' => 20,
                        'font_size' => 10,
                        'font' => 'normal'
                    )
                )
            ),
            'height' => 15,
        );

        $this->y -= 20;
        $page = $this->drawLineBlocks($page, array($lineBlock));
        return $page;
    }
}
