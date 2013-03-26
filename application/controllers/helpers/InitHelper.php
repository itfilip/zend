<?php
/**
 *
 * @author Filip
 * @version 
 */

class Zend_Controller_Action_Helper_InitHelper extends Zend_Controller_Action_Helper_Abstract {

	
	public function routeLogin() {
		$auth = Zend_Auth::getInstance();
		if ($auth->hasIdentity()) {
			// Identity exists; get it
			$identity = $auth->getIdentity();
		} else {
			$lastDecline = Zend_Controller_Action_HelperBroker::getStaticHelper('LastDecline');
			$lastDecline->saveRequestUri();			
			//$fwdParameters = array('fwdController'=>$params['controller'], 'fwdAction'=>$params['action']);
			$redirector = Zend_Controller_Action_HelperBroker::getStaticHelper('Redirector');
			$redirector->gotoSimpleAndExit(null, 'auth', null);
		}
	}

}
