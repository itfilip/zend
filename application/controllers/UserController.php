<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	$this->_helper->initHelper->routeLogin($this->_getAllParams());
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
    }

    public function indexAction()
    {
    	$users = new Application_Model_DbTable_Users();
    	$id = Zend_Auth::getInstance()->getIdentity()->id;
    	$user = $users->getUser($id);
    	$this->view->user = $user;
    }

    public function updatepwAction()
    {
    	$form = new Application_Form_Password();
    	
    	$request = $this->getRequest();
    	
    	if ($request->isPost()) {
    	
    		if ($form->isValid($request->getPost())) {
    	
    			$userID=Zend_Auth::getInstance()->getIdentity()->id;
    			$oldPW = $this->getRequest()->getPost('oldPW');
    			$newPW = $this->getRequest()->getPost('newPW');
    			
    			if ($userID > 0) {
    				$users = new Application_Model_DbTable_Users();
    				$user = $users->getUser($userID);
    				if (SHA1($oldPW.$user['salt'])==$user['password']) {
    					print_r($user);
    					$users->updateUserPassword($userID, SHA1($newPW.$user['salt']));
    					$this->_helper->redirector('logout', 'auth');
    				} else {
    					echo 'Invalid old password!';
    				}
    				
    			}
    		}
    	
    	}
    	
    	$this->view->form = $form;

    }

    public function updateAction()
    {
        $form = new Application_Form_User();
        $users = new Application_Model_DbTable_Users();
        $this->view->form = $form;
        $request = $this->getRequest();
        $id = Zend_Auth::getInstance()->getIdentity()->id; 
        
        if ($request->isPost()) {
        	 
        	if ($form->isValid($request->getPost())) {
        		
        		$name = $form->getValue('name');
        		$email = $form->getValue('email');
        		
        		$users->updateUser($id , $name, $email);
        		
        		$this->_helper->redirector('user', '');
        	}
        } else {
        	$form->populate($users->getUser($id));
        }
        
        
        	
    }


}





