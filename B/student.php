<?php

class Student{
	
	public $id;
	public $name;
	private $cgpa;
	protected $dept;	

	function __construct ($name="", $id="", $cgpa="", $dept=""){
		$this->name = $name;
		$this->id = $id;
		$this->cgpa = $cgpa;
		$this->dept = $dept;
	}

	public function getName(){
		return $this->name;
	}	

	public function setName($name){
		$this->name = $name;
	}

	public function printName(){
		return $this->name;
	}
}


$s1 = new Student('alamin','1709-1811-2');

echo $s1->name;




