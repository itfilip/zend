<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{


 	protected function _initView(){
		
 		Zend_Controller_Action_HelperBroker::addPath(APPLICATION_PATH .'/controllers/helpers');

 	}
 	
	protected function _initViewHelpers()
	{
		$view = new Zend_View();
		$viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer();
	 
		$view->addHelperPath('ZendX/JQuery/View/Helper/', 'ZendX_JQuery_View_Helper');
		$viewRenderer->setView($view);
		Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);
	}
	

 	
}
