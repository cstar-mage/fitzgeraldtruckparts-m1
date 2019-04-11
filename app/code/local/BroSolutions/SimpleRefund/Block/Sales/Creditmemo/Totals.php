<?php
class BroSolutions_SimpleRefund_Block_Sales_Creditmemo_Totals extends Mage_Sales_Block_Order_Creditmemo_Totals
{
    protected function _initTotals()
    {
        $this->_parentInitTotals();
        $this->removeTotal('base_grandtotal');
        if ((float) $this->getSource()->getAdjustmentPositive()) {
            $total = new Varien_Object(array(
                'code'  => 'adjustment_positive',
                'value' => $this->getSource()->getAdjustmentPositive(),
                'label' => $this->__('Adjustment Refund')
            ));
            $this->addTotal($total);
        }
        if ((float) $this->getSource()->getAdjustmentNegative()) {
            $total = new Varien_Object(array(
                'code'  => 'adjustment_negative',
                'value' => $this->getSource()->getAdjustmentNegative(),
                'label' => $this->__('Adjustment Fee')
            ));
            $this->addTotal($total);
        }
        /**
        <?php if ($this->getCanDisplayTotalPaid()): ?>
        <tr>
        <td colspan="6" class="a-right"><strong><?php echo $this->__('Total Paid') ?></strong></td>
        <td class="last a-right"><strong><?php echo $_order->formatPrice($_creditmemo->getTotalPaid()) ?></strong></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->getCanDisplayTotalRefunded()): ?>
        <tr>
        <td colspan="6" class="a-right"><strong><?php echo $this->__('Total Refunded') ?></strong></td>
        <td class="last a-right"><strong><?php echo $_order->formatPrice($_creditmemo->getTotalRefunded()) ?></strong></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->getCanDisplayTotalDue()): ?>
        <tr>
        <td colspan="6" class="a-right"><strong><?php echo $this->__('Total Due') ?></strong></td>
        <td class="last a-right"><strong><?php echo $_order->formatPrice($_creditmemo->getTotalDue()) ?></strong></td>
        </tr>
        <?php endif; ?>
         */
        return $this;
    }

    protected function _parentInitTotals()
    {
        $handles = $this->getLayout()->getUpdate()->getHandles();
        if(in_array('sales_email_order_creditmemo_items', $handles) !== false){
            $source = $this->getSource();

            $this->_totals = array();
            $this->_totals['subtotal'] = new Varien_Object(array(
                'code'  => 'subtotal',
                'value' => $source->getSubtotal(),
                'label' => $this->__('Refund Subtotal')
            ));


            /**
             * Add shipping
             */
            if (!$source->getIsVirtual() && ((float) $source->getShippingAmount() || $source->getShippingDescription()))
            {
                $this->_totals['shipping'] = new Varien_Object(array(
                    'code'  => 'shipping',
                    'field' => 'shipping_amount',
                    'value' => $this->getSource()->getShippingAmount(),
                    'label' => $this->__('Shipping & Handling')
                ));
            }

            /**
             * Add discount
             */
            if (((float)$this->getSource()->getDiscountAmount()) != 0) {
                if ($this->getSource()->getDiscountDescription()) {
                    $discountLabel = $this->__('Discount (%s)', $source->getDiscountDescription());
                } else {
                    $discountLabel = $this->__('Discount');
                }
                $this->_totals['discount'] = new Varien_Object(array(
                    'code'  => 'discount',
                    'field' => 'discount_amount',
                    'value' => $source->getDiscountAmount(),
                    'label' => $discountLabel
                ));
            }

            $this->_totals['grand_total'] = new Varien_Object(array(
                'code'  => 'grand_total',
                'field'  => 'grand_total',
                'strong'=> true,
                'value' => $source->getGrandTotal(),
                'label' => $this->__('Refund Grand Total')
            ));

            /**
             * Base grandtotal
             */
            if ($this->getOrder()->isCurrencyDifferent()) {
                $this->_totals['base_grandtotal'] = new Varien_Object(array(
                    'code'  => 'base_grandtotal',
                    'value' => $this->getOrder()->formatBasePrice($source->getBaseGrandTotal()),
                    'label' => $this->__('Grand Total to be Charged'),
                    'is_formated' => true,
                ));
            }
            return $this;
        }
        return parent::_initTotals();
    }
}