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
		//$username->addValidator('Digits');

		$contact = new Zend_Form_Element_Text('contact');
		$contact->setRequired(true);
		$contact->setLabel('Contact');
		//$contact->addFilter('StripTags');
		//$contact->addValidator('Digits');

		$gender = new Zend_Form_Element_Radio('gender');
		$gender->addMultiOption('male', 'Male');
		$gender->addMultiOption('female', 'Female');
		$gender->setRequired(true);
		$gender->setLabel('Gender');
		
		$cities = new Zend_Form_Element_MultiCheckbox("cities");
		$cities->addMultiOptions(array(
						"mumbai" => "Mumbai",
						"pune" => "Pune"
					));
		$cities->setLabel("Cities");
		//$cities->setValue('mumbai');  // To checked by default.
		
		$countries = new Zend_Form_Element_Select("countries");
		$countries->addMultiOptions(array(
			"" => "Select",
			"india" => "india",
			"russia" => "Russia"
		));
		$countries->setLabel("Countries");
		//$countries->setValue('india'); // To show selected by default.

		$submit = new Zend_Form_Element_Submit("submit");

		$this->addElements(array($username, $gender, $contact, $cities, $countries, $submit));
		
	}
			

}
