<?php

class Application_Model_User
{
	protected $_id;
	protected $_username;
	protected $_contact;
	protected $_gender;
	protected $_city;
	protected $_country;
	
	public function __construct(array $data){
		if(is_array($data)){
			$this->setOptions($data);
		}
	}

	public function setOptions(array $data){
		$methods = get_class_methods($this);
		if(is_array($data)){
			foreach($data as $k => $v){
				$method = "set".ucwords($k);
				if(in_array($method, $methods)){
					$this->$method($v);
				}
			}
		}
		return $this;
	}

	public function setId($data){
		$this->_id = $data;
		return $this;
	}
	
	public function getId(){
		return $this->_id;
	}
	
	public function setUsername($data){
		$this->_username= $data;
		return $this;
	}
	
	public function getUsername(){
		return $this->_username;
	}
	
	public function setContact($data){
		$this->_contact = $data;
		return $this;
	}
	
	public function getContact(){
		return $this->_contact;
	}
	
	public function setGender($data){
		$this->_gender = $data;
		return $this;
	}
	
	public function getGender(){
		return $this->_gender;
	}
	
	public function setCity($data){
		$this->_city = $data;
		return $this;
	}
	
	public function getCity(){
		return $this->_city;
	}
	
	public function setCountry($data){
		$this->_country = $data;
		return $this;
	}
	
	public function getCountry(){
		return $this->_country;
	}
	
}

