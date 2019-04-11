<?php 
class Ecomwise_Creditlimit_Adminhtml_Credit_RulesController extends Mage_Adminhtml_Controller_Action
{
	protected function _initAction()
	{
		$this->loadLayout()->_setActiveMenu('ecomwisecredit');		
		return $this;
	}
	
	public function indexAction()
	{		
		$helper = Mage::helper('ecomwisecredit');
		$redirect = $helper->isModuleDisabled();	
			
		if($redirect) {
			if($helper->isSuiteEnabled()){
				$error_string = "Please enable the B2B suite from 'System -> Configuration -> B2B Suite -> General ->  Enable B2B Suite'<br />
						and enable the credit limit extension from 'System -> Configuration -> B2B Suite -> Extensions -> Enable Creditlimit' if you need to use this feature.";
			}else {
				$error_string = "Please enable the credit limit extension from 'System -> Configuration -> B2B Extensions -> Credit Limit -> General -> Extension Enabled' if you need to use this feature.";
			}
			Mage::getSingleton('adminhtml/session')->addError( $this->__( $error_string )  );		
			$this->_redirect('*/dashboard/');			
			return;
		}
		
		$this->_initAction();
		$this->_title($this->__('Limits'));
		$this->renderLayout();
	}
	
	public function newAction(){
		$this->_initAction();
	
		$id  = $this->getRequest()->getParam('id');
		$model = Mage::getModel('ecomwisecredit/limits');
	
		$this->_title($this->__('Edit Credit Limit'));
	
		$data = Mage::getSingleton('adminhtml/session')->getNotificationData(true);
		
		if(!Mage::registry('creditlimit')){
			Mage::register('creditlimit', $model);
		}
		$this->renderLayout();
	}
	
	
	public function addAction(){
		$this->_initAction();
		
		$customer_id  = $this->getRequest()->getParam('customer_id');		
		$model = Mage::getModel('ecomwisecredit/limits');
		
		$this->_title($this->__('Add Credit Limit'));
		
		$data = Mage::getSingleton('adminhtml/session')->getNotificationData(true);
		
		if(!Mage::registry('creditlimit')){
			Mage::register('creditlimit', $model);
		}
		$this->renderLayout();
	}
	
	
	public function editAction(){
		$this->_initAction();
	
		$id  = $this->getRequest()->getParam('id');
		$model = Mage::getModel('ecomwisecredit/limits');
	
		if ($id) {
			$model->load($id);
	
			if (!$model->getId()) {
				Mage::getSingleton('adminhtml/session')->addError($this->__('This no longer exists.'));
				$this->_redirect('*/*/');
				return;
			}
		}
	
		$this->_title($this->__('Edit Credit Limit'));
	
		$data = Mage::getSingleton('adminhtml/session')->getNotificationData(true);
		
		if(!Mage::registry('creditlimit')){
			Mage::register('creditlimit', $model);
		}
		$this->renderLayout();
	}
	
	public function saveAction()
	{
		if ($this->getRequest()->getPost())
		{
			try {									
				$postData = $this->getRequest()->getPost();
								
				$customer_id = $this->getRequest()->getParam('checked') ? $this->getRequest()->getParam('checked') : $this->getRequest()->getParam('entity_id');
				$rule_id = $this->getRequest()->getParam('id');	
							
				
				if($customer_id){									
					$customer_model = Mage::getModel('ecomwisecredit/limits_customers')->loadByCustomerId($customer_id);
										
					if($customer_model->getId()){							
						if($customer_model->getRuleId() != $rule_id){
							Mage::getSingleton('adminhtml/session')
							->addError("Credit limit for customer already exist");
								
							$this->_redirect('*/*/');
							return;
						}												
					}
					
					// check if the customer on which the rule applies have open amount larger than the limit amount
					$order_status_open = explode(',', Mage::getStoreConfig('creditlimit/parameters_creditlimit/order_status_open') );
					$creditlimit_method = Mage::getStoreConfig('creditlimit/parameters_creditlimit/payment_method');
					
					$orderCollection=Mage::getModel('sales/order')->getCollection()
					->join(array('payment'=>'sales/order_payment'),'main_table.entity_id=parent_id','method');
					
					$orderCollection
					->addFieldToFilter('method',array(array('like'=>$creditlimit_method)))
					->addFieldToFilter('customer_id', array('eq' => array($customer_id)))
					->addFieldToFilter('status',array('in' => $order_status_open ));
					
					$total = 0;
					foreach($orderCollection as $order){
						$total += $order->getGrandTotal();
					}
					
					if($total > 0 && $total > $this->getRequest()->getPost('amount')){
						Mage::getSingleton('adminhtml/session')->addError("Cannot edit the credit limit. The used amount of credit limit for the customer is larger than the entered credit limit.");
						$this->_redirect('*/*/');
						return;
					}
					
				}								
				
				$testModel = Mage::getModel('ecomwisecredit/limits');
				if( $this->getRequest()->getParam('id') <= 0 )
					$testModel->setCreatedTime(
							Mage::getSingleton('core/date')
							->gmtDate()
					);
				$testModel
				->addData($postData)				
				->setId($rule_id)
				->save();
	
				$rule_id = $testModel->getId();
	
				Mage::getModel('ecomwisecredit/limits_customers')->deleteByRuleId( $rule_id );
				if($customer_id){																	
					$customer_model = Mage::getModel('ecomwisecredit/limits_customers');							
					
					$data = array(
							'customer_id' => $customer_id,
							'rule_id' => $rule_id
					);
					$customer_model->addData($data);
					$customer_model->save();
				}
	
				$success_msg = Mage::helper('ecomwisecredit')->__('Rule %s Successfully Saved', $testModel->getName());
				Mage::getSingleton('adminhtml/session')
					->addSuccess($success_msg);
				Mage::getSingleton('adminhtml/session')
					->settestData(false);
				$this->_redirect('*/*/');
				return;
			} catch (Exception $e){
				Mage::getSingleton('adminhtml/session')
					->addError($e->getMessage());
				Mage::getSingleton('adminhtml/session')
					->settestData($this->getRequest()
					->getPost()
				);
				$this->_redirect('*/*/edit',
						array('id' => $this->getRequest()
								->getParam('id')));
				return;
			}
		}
		$this->_redirect('*/*/');
	}
	
	public function deleteAction()
	{
		if ($this->getRequest()->getParam('id'))
		{
			try {								
				$rule_id = $this->getRequest()->getParam('id');
				$customer_id = Mage::getModel('ecomwisecredit/limits_customers')->loadByRuleId($rule_id);
								
				// check if the customer on which the rule applies have open orders, if so, return error mesage				
				$order_status_open = explode(',', Mage::getStoreConfig('creditlimit/parameters_creditlimit/order_status_open') );
				$creditlimit_method = Mage::getStoreConfig('creditlimit/parameters_creditlimit/payment_method');
				
				$orderCollection=Mage::getModel('sales/order')->getCollection()
				->join(array('payment'=>'sales/order_payment'),'main_table.entity_id=parent_id','method');
				
				$orderCollection
				->addFieldToFilter('method',array(array('like'=>$creditlimit_method)))
				->addFieldToFilter('customer_id', array('eq' => array($customer_id)))
				->addFieldToFilter('status',array('in' => $order_status_open ));
				
				$total = 0;
				foreach($orderCollection as $order){
					$total += $order->getGrandTotal();
				}
				if($total > 0){
					Mage::getSingleton('adminhtml/session')->addError("Cannot delete this credit limit. There is a used credit limit for this customer.");
					$this->_redirect('*/*/');
					return;
				}				
												
				Mage::getModel('ecomwisecredit/limits')->setId($rule_id)->delete();
				Mage::getModel('ecomwisecredit/limits_customers')->deleteByRuleId($rule_id);
				$success_msg = Mage::helper('ecomwisecredit')->__('Record Successfully Deleted');
				Mage::getSingleton('adminhtml/session')->addSuccess($success_msg);
			} catch (Exception $e){
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/');
				return;
			}
		}
		$this->_redirect('*/*/');
	}		
	
/**
	 * Action for ajax request from assigned users grid
	 *
	 */
	public function editrolegridAction()
	{  
		$this->getResponse()->setBody(     
				$this->getLayout()->createBlock('ecomwisecredit/credit_rules_edit_tab_customers')->toHtml()
		);	
	}	
	
	
	protected function _isAllowed()
	{
		return Mage::getSingleton('admin/session')->isAllowed('ecomwisecredit/limits');
	}
	
}
