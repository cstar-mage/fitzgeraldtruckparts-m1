<?php
//D:\xampp\htdocs\attilius\app\code\core\Mage\Adminhtml\controllers\Sales
//;Mage_Adminhtml_Sales_OrderController
//require_once 'Mage/Adminhtml/controllers/Sales/OrderController.php';
require_once(Mage::getModuleDir('controllers', 'Mage_Adminhtml').DS.'Sales'.DS.'OrderController.php');

class Tech18_OrderComment_Adminhtml_Sales_OrderController extends Mage_Adminhtml_Sales_OrderController
{
    public function addCommentAction()
    {
         if ($order = $this->_initOrder()) {
            try {
                $response = false;
                $data = $this->getRequest()->getPost('history');
                $notify = isset($data['is_customer_notified']) ? $data['is_customer_notified'] : false;
                $visible = isset($data['is_visible_on_front']) ? $data['is_visible_on_front'] : false;
                
                //getting username
                $session = Mage::getSingleton('admin/session');
                $username = $session->getUser()->getUsername();
                //$append = " [name](by ".$username.")[/name]";
                $append = " (By: ".$username.")";
                
                //appending username with markup to comment
                $order->addStatusHistoryComment($data['comment'].$append, $data['status'])
                    ->setIsVisibleOnFront($visible)
                    ->setIsCustomerNotified($notify);

                $comment = trim(strip_tags($data['comment']));

                $order->save();
                $order->sendOrderUpdateEmail($notify, $comment);

                $this->loadLayout('empty');
                $this->renderLayout();
            }
            catch (Mage_Core_Exception $e) {
                $response = array(
                    'error'     => true,
                    'message'   => $e->getMessage(),
                );
            }
            catch (Exception $e) {
                $response = array(
                    'error'     => true,
                    'message'   => $this->__('Cannot add order history.')
                );
            }
            
            if (is_array($response)) {
                $response = Mage::helper('core')->jsonEncode($response);
                $this->getResponse()->setBody($response);
            }
         }
    }

    public function exportCsvAction()
    {
        $fileName   = 'orders.csv';
        $grid       = $this->getLayout()->createBlock('adminhtml/sales_order_grid');
        $grid->addColumnAfter('admin_username', array('header' => 'Created By',
            'index' => 't1.admin_username', 'type' => 'text', 'renderer' => 'BroSolutions_ShipmentCommentGrid_Block_Adminhtml_Sales_Order_View_Createdby_Renderer'), 'status');
        $this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
    }

}
