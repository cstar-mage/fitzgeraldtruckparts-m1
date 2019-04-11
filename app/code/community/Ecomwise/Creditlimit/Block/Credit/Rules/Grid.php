<?php
class Ecomwise_Creditlimit_Block_Credit_Rules_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	public function __construct(){
		parent::__construct();
		$this->setId('creditRules');		
		$this->setDefaultDir('DESC');		
		$this->setSaveParametersInSession(true);	
	}	
	
	protected function _prepareCollection(){		
		$collection = Mage::getModel('ecomwisecredit/limits')->getCollection();
		
		$resource = Mage::getSingleton('core/resource');		
		$cw = Mage::getSingleton('core/resource')->getConnection('core_write');
		
		$collection->getSelect()->joinLeft(array('limits' => $resource->getTableName("ecomwise_credit_limit_customers")), 'main_table.id = limits.rule_id', array('limits.customer_id'));		
		$collection->getSelect()->joinLeft(array('customer' => $resource->getTableName("customer_entity")), 'limits.customer_id = customer.entity_id', array('customer.email'));
		
		$this->setCollection($collection);		
		return parent::_prepareCollection();		
	}

	protected function _prepareColumns(){		
		
		$this->addColumn('id',
				array(
						'header'=> $this->__('ID'),
						'align' =>'right',
						'width' => '50px',
						'index' => 'id',
						'type'	=> 'number'
				)
		);
				
		
		$this->addColumn('amount',
				array(
						'header'=> $this->__('Amount'),
						'index' => 'amount',
						'type'	=> 'number'
				)
		);
		
		$this->addColumn('email', array(
				'header'    => $this->__('Individual Customers'),
				'align'     => 'left',
				'width'     => '200px',
				'index'     => 'email',
		));
				
	}		
	
	public function getRowUrl($row){
		return $this->getUrl('*/*/edit', array('id' => $row->getId()));
	}

} 