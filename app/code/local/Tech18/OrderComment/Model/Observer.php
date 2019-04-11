<?php
/**
 * Observer methods execute on specific events
 *
 */
 
class Tech18_OrderComment_Model_Observer
{
    public function addCurrentAdminUser(Varien_Event_Observer $observer){
        try{
            $order = $observer->getEvent()->getOrder();
            if ($order){
                try{
                    if (Mage::getSingleton('admin/session')->isLoggedIn()){
                        $notify = isset($data['is_customer_notified']) ? $data['is_customer_notified'] : false;
                        $visible = isset($data['is_visible_on_front']) ? $data['is_visible_on_front'] : false;
                        
                        //getting username
                        $session = Mage::getSingleton('admin/session');
                        $username = $session->getUser()->getUsername();
                        $append = " (By: ".$username.")";
                        
                        //appending username with markup to comment
                        $order->addStatusHistoryComment($append);
                        $order->setAdminUsername($username);
                    }
                }
                catch (Mage_Core_Exception $e){
                    Mage::log("Error: " . $e->getMessage());
                }
                catch (Exception $e){
                    Mage::log("Error: Cannot add order history");
                }
            }
        } catch(Exception $e){
            Mage:log($e->getMessage());
        }
    }
    
    public function salesOrderGridCollectionLoadBefore($observer){
        $collection = $observer->getOrderGridCollection();
        $select = $collection->getSelect();
        $actionName = Mage::app()->getRequest()->getActionName();
        if($actionName != 'exportCsv'){
            $select->joinLeft(array('t1'=>$collection->getTable('sales/order')), 't1.entity_id=main_table.entity_id', array('admin_username' => 't1.admin_username'));
        } else {
            if(!Mage::registry('admin_name_joined_to_collection')){
                $select->joinLeft(array('t1'=>$collection->getTable('sales/order')), 't1.entity_id=main_table.entity_id', array('admin_username' => 't1.admin_username'));
                Mage::register('admin_name_joined_to_collection', true);
            }
        }

        
        //http://stackoverflow.com/questions/18147525/magento-observer-to-add-order-grid-column-ambiguous-issue        
		if ($where = $select->getPart('where')){
            $arrField = array('increment_id', 'store_id', 'created_at', 'billing_name', 'shipping_name', 'grand_total', 'base_grand_total', 'status');
            foreach ($where as $key=> $condition){
                $field = '';
                $strposfound = 0;
                if (strpos($condition, '`') !== false){
					if((strpos($condition, 'main_table') === false) && (strpos($condition, 't1') === false) && (strpos($condition, 't2') === false)){
						if (strpos($condition, '`admin_username`') === false){
							preg_match_all('/`/', $condition, $matches, PREG_OFFSET_CAPTURE);
							$strposfound = $matches[0][1][1] - $matches[0][0][1];
							$field = substr($condition, $matches[0][0][1], $strposfound + 1);
							if ($field){
								$newcondition = str_replace($field, '`main_table`.'.$field, $condition);
								$where[$key] = $newcondition;
							}
						}
					}
                } else {
                    foreach ($arrField as $k => $v){
                        if (strpos($condition, $v) !== false){
							if((strpos($condition, 'main_table') === false) && (strpos($condition, 't1') === false) && (strpos($condition, 't2') === false)){
								$newcondition = str_replace($v, 'main_table.'.$v, $condition);
								$where[$key] = $newcondition;
							}
                        }
                    }
                }
            }
            $select->setPart('where', $where);
        }
    }
}
