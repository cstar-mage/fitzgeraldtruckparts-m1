<?php

class BroSolutions_ShipmentCommentGrid_Block_Postorder_Adminhtml_Sales_Order_Grid extends Shipperhq_Postorder_Block_Adminhtml_Sales_Order_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);
        $collection->addFilterToMap('created_at', 'main_table.created_at');
        $collection->addFilterToMap('status', 'main_table.status');
        $collection->addFilterToMap('increment_id', 'main_table.increment_id');
        $collection->addFilterToMap('base_grand_total', 'main_table.base_grand_total');
        $collection->addFilterToMap('grand_total', 'main_table.grand_total');
        $collection->addFilterToMap('store_id', 'main_table.store_id');

        $select = $collection->getSelect();
        $select->joinLeft(array('flat_order' => 'sales_flat_order'),
            'main_table.entity_id = flat_order.entity_id',
            array('flat_order.ships_from'));

        //call grandparent function to complete
        return Mage_Adminhtml_Block_Widget_Grid::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('real_order_id', array(
            'header' => Mage::helper('sales')->__('Order #'),
            'width'  => '80px',
            'type'   => 'text',
            'index'  => 'increment_id',
        ));

        if (!Mage::app()->isSingleStoreMode()) {
            $this->addColumn('store_id', array(
                'header'          => Mage::helper('sales')->__('Purchased From (Store)'),
                'index'           => 'store_id',
                'type'            => 'store',
                'store_view'      => true,
                'display_deleted' => true,
            ));
        }

        $this->addColumn('created_at', array(
            'header' => Mage::helper('sales')->__('Purchased On'),
            'index'  => 'created_at',
            'type'   => 'datetime',
            'width'  => '100px',
        ));

        $this->addColumn('billing_name', array(
            'header' => Mage::helper('sales')->__('Bill to Name'),
            'index'  => 'billing_name',
        ));

        $this->addColumn('shipping_name', array(
            'header' => Mage::helper('sales')->__('Ship to Name'),
            'index'  => 'shipping_name',
        ));

        $this->addColumn('ships_from', array(
            'type'=>'options',
            'header' => Mage::helper('sales')->__('Ships from'),
            'index'  => 'ships_from',
            'options' => Mage::getModel('shipmentcommentgrid/eav_entity_attribute_source_order_options_shipsfrom')->getOptionArray()
        ));

        $this->addColumn('base_grand_total', array(
            'header'   => Mage::helper('sales')->__('G.T. (Base)'),
            'index'    => 'base_grand_total',
            'type'     => 'currency',
            'currency' => 'base_currency_code',
        ));

        $this->addColumn('grand_total', array(
            'header'   => Mage::helper('sales')->__('G.T. (Purchased)'),
            'index'    => 'grand_total',
            'type'     => 'currency',
            'currency' => 'order_currency_code',
        ));

        $this->addColumn('status', array(
            'header'  => Mage::helper('sales')->__('Status'),
            'index'   => 'status',
            'type'    => 'options',
            'width'   => '70px',
            'options' => Mage::getSingleton('sales/order_config')->getStatuses(),
        ));

        if (Mage::getSingleton('admin/session')->isAllowed('sales/order/actions/view')) {
            $this->addColumn('action',
                array(
                    'header'    => Mage::helper('sales')->__('Action'),
                    'width'     => '50px',
                    'type'      => 'action',
                    'getter'    => 'getId',
                    'actions'   => array(
                        array(
                            'caption'     => Mage::helper('sales')->__('View'),
                            'url'         => array('base' => '*/sales_order/view'),
                            'field'       => 'order_id',
                            'data-column' => 'action',
                        ),
                    ),
                    'filter'    => false,
                    'sortable'  => false,
                    'index'     => 'stores',
                    'is_system' => true,
                ));
        }
        $this->addRssList('rss/order/new', Mage::helper('sales')->__('New Order RSS'));

        $this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV'));
        $this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel XML'));

        return parent::_prepareColumns();
    }
    protected function _getExportHeaders()
    {
        $row = array();
        foreach ($this->_columns as $column) {
            if (!$column->getIsSystem()) {
                $row[] = $column->getExportHeader();
            }
        }
        return $row;
    }
}
