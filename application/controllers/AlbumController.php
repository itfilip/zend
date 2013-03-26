<?php

class AlbumController extends Zend_Controller_Action
{
	
	protected $_flashMessenger = null;
	
    public function init()
    {
    	$this->_flashMessenger =$this->_helper->getHelper('FlashMessenger');
    	$this->view->messages = $this->_flashMessenger->getMessages();
    	
    	$this->_helper->initHelper->routeLogin();
    	
		$page =  $this->_getParam('page', 1);
    	$this->view->page = $page;
    	
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
        // action body

    	$albumsPage = new Application_Model_DbTable_Albums();
		$this->view->albums = $albumsPage->getAlbumPage($this->view->page);
		
    }

    public function addAction()
    {
   		$form = new Application_Form_Album();
		$form->submit->setLabel('Add');
		$request = $this->_request;
		if ($request->isPost()) {
			$formData = $this->getRequest()->getPost();
			
			if ($form->isValid($request->getPost())) {
				$artist = $form->getValue('artist');
				$title = $form->getValue('title');
				$albums = new Application_Model_DbTable_Albums();
				$albums->addAlbum($artist, $title);
				$this->_flashMessenger->addMessage('Record Added!');
				$this->_helper->redirector('index', 'album', '', array('page'=>$this->view->page));
			} else {
				$form->populate($formData);
			}
		} 		
		$this->view->form = $form;
    }

    public function editAction()
    {
		$form = new Application_Form_Album();
		$form->submit->setLabel('Save');
		$this->view->form = $form;
		if ($this->getRequest()->isPost()) {
			$formData = $this->getRequest()->getPost();
			if ($form->isValid($formData)) {
				$id = (int)$form->getValue('id');
				$artist = $form->getValue('artist');
				$title = $form->getValue('title');
				$albums = new Application_Model_DbTable_Albums();
				$albums->updateAlbum($id, $artist, $title);
				$this->_flashMessenger->addMessage('Record saved!');
				$this->_helper->redirector('index', 'album', '', array('page'=>$this->view->page));
			} else {
				$form->populate($formData);
			}
		} else {
			$id = $this->_getParam('id', 0);
			if ($id > 0) {
				$albums = new Application_Model_DbTable_Albums();
				$form->populate($albums->getAlbum($id));
			}
		}
    }

    public function deleteAction()
    {
	    if ($this->getRequest()->isPost()) {
			$del = $this->getRequest()->getPost('del');
			if ($del == 'Yes') {
				$id = $this->getRequest()->getPost('id');
				$albums = new Application_Model_DbTable_Albums();
				$albums->deleteAlbum($id);
				$this->_flashMessenger->addMessage('Record deleted!');
			}
			$this->_helper->redirector('index', 'album', '', array('page'=>$this->view->page));
		} else {
			$id = $this->_getParam('id', 0);
			$albums = new Application_Model_DbTable_Albums();
			$this->view->album = $albums->getAlbum($id);
		}
    }
    
    public function getAction() {
    	if ($this->getRequest()->isPost()) {
    		$id = $this->getRequest()->getPost('albumID');
    		$albums = new Application_Model_DbTable_Albums();
    		$this->view->album = $albums->getAlbum($id);
    	}
    	
    }


}







