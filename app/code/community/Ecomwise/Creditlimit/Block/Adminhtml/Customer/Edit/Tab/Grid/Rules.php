<?php
class Ecomwise_Creditlimit_Block_Adminhtml_Customer_Edit_Tab_Grid_Rules extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {    	
        parent::__construct();
        $this->setDefaultDir('asc');
        $this->setId('customersGrid');
        $this->setSaveParametersInSession(false);
        $this->setFilterVisibility(false);
        $this->setUseAjax(true);
        
        
    }
    
    public function getMainButtonsHtml()
    {
    	$html = parent::getMainButtonsHtml();
    	
    	$customer_id = $this->getRequest()->getParam('id');
    	
    	$rule = Mage::helper('ecomwisecredit')->getRuleByCustomer($customer_id);
    	
    	if(!$rule){
    		$addButton = $this->getLayout()->createBlock('adminhtml/widget_button')
    		->setData(array(
    				'label'     => Mage::helper('ecomwisecredit')->__('Add Credit Limit'),
    				'onclick'   => "setLocation('".$this->getUrl('*/credit_rules/add',array('customer_id' => $customer_id))."')",
    				'class'   => 'task'
    		))->toHtml();
    	}else{
    		$addButton = $this->getLayout()->createBlock('adminhtml/widget_button')
    		->setData(array(
    				'label'     => Mage::helper('ecomwisecredit')->__('Delete Limit'),
    				'onclick'   => "setLocation('".$this->getUrl('*/credit_rules/edit',array('id' => $rule->getRuleId()))."')",
    				'class'   => 'task'
    		))->toHtml();
    	}
    	
    	
    	return $addButton.$html;
    }
    
    protected function _prepareCollection()
    {    	
        $customer_id = $this->getRequest()->getParam('id');
                
        if(!Mage::registry('customer_id')){
        	Mage::register('customer_id', $customer_id);
        }              
        $collection = Mage::getModel('ecomwisecredit/limits')->getCollection(); 
        $credit_limit_customers_table = Mage::getResourceModel('ecomwisecredit/limits_customers')->getMainTable();        
         $collection->getSelect()
        ->join(
        		array('eclc' => $credit_limit_customers_table),
        		'main_table.id = eclc.rule_id  AND eclc.customer_id=' . $customer_id,
        		array('eclc.customer_id as checked')
        );         
        $collection->setOrder('checked');
                           
        $this->setCollection($collection);        
        return parent::_prepareCollection();        
    }

	protected function _prepareColumns(){			
		
		$this->addColumn('id',
				array(
						'header'=> Mage::helper('ecomwisecredit')->__('ID'),
						'align' =>'right',
						'width' => '50px',
						'index' => 'id',
						'type'	=> 'number',
						'filter' => false,
						'sortable'  => false,
				)
		);
				
		$this->addColumn('amount',
				array(
						'header'=> Mage::helper('ecomwisecredit')->__('Amount'),
						'index' => 'amount',
						'filter' => false,
						'sortable'  => false,
						'type'	=> 'number'
				)
		);
		
		$this->addColumn('action', array(
				'header'    => ' ',
				'filter'    => false,
				'sortable'  => false,
				'width'     => '100px',
				'renderer'  => 'ecomwisecredit/adminhtml_customer_renderer_action'
		));		
	}	

}

