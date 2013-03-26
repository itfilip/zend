<?php

class Application_Form_Password extends Zend_Form
{

    public function init()
    {
		$this->setName("password");
        $this->setMethod('post');

        $this->addElement('password', 'oldPW', array(
        		'filters'    => array('StringTrim'),
        		'validators' => array(
        				array('StringLength', false, array(1, 50)),
        		),
        		'required'   => true,
        		'label'      => 'Old password:',
        ));
        
        $this->addElement('password', 'newPW', array(
        		'filters'    => array('StringTrim'),
        		'validators' => array(
        				array('StringLength', false, array(5, 15)),
        		),
        		'required'   => true,
        		'label'      => 'Insert new Password:',
        ));
        
        $this->addElement('password', 'newPW2', array(
        		'filters'    => array('StringTrim'),
        		'validators' => array(
        				array('StringLength', false, array(5, 15)),
        				array('Identical', false, array('token' => 'newPW'))
        		),
        		'required'   => true,
        		'label'      => 'Retype new Password:',
        ));
        
        $this->addElement('submit', 'changePassword', array(
        		'required' => false,
        		'ignore'   => true,
        		'label'    => 'Change Password',
        ));
    }


}

