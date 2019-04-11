<?php
class BroSolutions_SimpleRefund_Block_Adminhtml_Sales_Order_View_Tab_Creditmemos extends Mage_Adminhtml_Block_Sales_Order_View_Tab_Creditmemos
{
    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass())
            ->addFieldToSelect('entity_id')
            ->addFieldToSelect('created_at')
            ->addFieldToSelect('increment_id')
            ->addFieldToSelect('order_currency_code')
            ->addFieldToSelect('store_currency_code')
            ->addFieldToSelect('base_currency_code')
            ->addFieldToSelect('state')
            ->addFieldToSelect('grand_total')
            ->addFieldToSelect('base_grand_total')
            ->addFieldToSelect('billing_name')
        ;
        $resource = Mage::getSingleton('core/resource');
        $tableName = $resource->getTableName('sales_flat_creditmemo');
        $collection->getSelect()->joinLeft(
            array('base_table' => $tableName),
            'main_table.entity_id = base_table.entity_id',
            array('base_grand_total_origin' => 'base_table.grand_total')
        );
        $collection->getSelect()->where('main_table.order_id = '.$this->getOrder()->getId());
        Mage::log($collection->getSelect()->__toString(), NULL, 'query.log');
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('increment_id', array(
            'header' => Mage::helper('sales')->__('Credit Memo #'),
            'width' => '120px',
            'index' => 'increment_id',
        ));

        $this->addColumn('billing_name', array(
            'header' => Mage::helper('sales')->__('Bill to Name'),
            'index' => 'billing_name',
        ));

        $this->addColumn('created_at', array(
            'header' => Mage::helper('sales')->__('Created At'),
            'index' => 'created_at',
            'type' => 'datetime',
        ));

        $this->addColumn('state', array(
            'header'    => Mage::helper('sales')->__('Status'),
            'index'     => 'state',
            'type'      => 'options',
            'options'   => Mage::getModel('sales/order_creditmemo')->getStates(),
        ));
        /*$this->addColumn('base_grand_total', array(
            'header'    => Mage::helper('customer')->__('Refunded'),
            'index'     => 'base_grand_total',
            'type'      => 'currency',
            'currency'  => 'base_currency_code',
        ));*/
        $this->addColumn('base_grand_total_origin', array(
            'header'    => Mage::helper('customer')->__('Refunded'),
            'index'     => 'base_grand_total_origin',
            'type'      => 'currency',
            'currency'  => 'base_currency_code',
            'renderer'  => 'BroSolutions_SimpleRefund_Block_Adminhtml_Sales_Order_View_Tab_Creditmemos_Totalrenderer',
        ));
        $this->sortColumnsByOrder();
        return $this;
    }
}