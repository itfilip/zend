<?php

class Application_Form_User extends Zend_Form
{

    public function init()
    {
        $this->setName('user');
		$id = new Zend_Form_Element_Hidden('id');
		$id->addFilter('Int');
		$name = new Zend_Form_Element_Text('name');
		$name->setLabel('Name')
				->setRequired(true)
				->addFilter('StripTags')
				->addFilter('StringTrim')
				->addValidator('NotEmpty');
		$email = new Zend_Form_Element_Text('email');
		$email->setLabel('Email')
				->setRequired(true)
				->addFilter('StripTags')
				->addFilter('StringTrim')
				->addValidator('NotEmpty')
				->addValidator('EmailAddress',  TRUE  )
				->addValidator(new Zend_Validate_Db_NoRecordExists(array(
								            'table' => 'users',
								            'field' => 'email',
											'exclude' => array(
												            'field' => 'id',
												            'value' => Zend_Auth::getInstance()->getIdentity()->id
												        )
					        				))
				);
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setAttrib('id', 'submitbutton');
		$this->addElements(array($id, $name, $email, $submit));
    }


}

