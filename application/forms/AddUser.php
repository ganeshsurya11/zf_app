<?php

Class Form_AddUser extends Zend_Form {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function init(){
		$this->setAction("Userform");
		$this->setAction( BASEURL . '/user/index/add');
		$username = new Zend_Form_Element_Text('username');
		$username->setRequired(true);
		$username->setLabel('Username');
		$username->addFilter('StripTags');
		$username->addValidator('Digits');

		$contact = new Zend_Form_Element_Text('contact');
		$contact->setRequired(true);
		$contact->setLabel('Contact');
		$contact->addFilter('StripTags');
		$contact->addValidator('Digits');


		$submit = new Zend_Form_Element_Submit('submit');

		$this->addElements(array($username, $contact, $submit));
	}
			

}
