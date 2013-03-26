<?php

/**
 * IndexController
 * 
 * @author
 * @version 
 */

require_once 'Zend/Controller/Action.php';
class IndexController extends Zend_Controller_Action {
	/**
	 * The default action - show the home page
	 */
	public function init()
	{
		$this->_helper->contextSwitch()
		->setContext(
				'html', array(
						'suffix'    => '',
						'headers'   => array(
								'Content-Type' => 'text/html; Charset=UTF-8',
						),
				)
		)
		->addActionContext('index', array('html','xml', 'json'))
		->setAutoJsonSerialization(true)
		->initContext();
		
		$this->_flashMessenger =$this->_helper->getHelper('FlashMessenger');
		$this->view->messages = $this->_flashMessenger->getMessages();
		 
		$this->_helper->initHelper->routeLogin();
	}
	
	public function indexAction() {
		// TODO Auto-generated IndexController::indexAction() default action
	}
}
