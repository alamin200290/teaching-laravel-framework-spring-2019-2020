<?php

	class Student {

		public static $id = "12-111-1"; 
		public $name = "XYZ"; 
		private $cgpa = 4;
		protected $dept = "CSE";

		function __construct($name='XYZ', $id="", $cgpa=2.5){
			$this->name = $name;
			$this->id = $id;
			$this->cgpa = $cgpa;
		}

		function getName(){
			return $this->name;
		}

		function setName($name){
			$this->name = $name;
		}

		function printName(){
			return $this->name;
		}

		public abstract function myname();
	}


	class CSstudent extends Student{
		public function (){

		}

		public function myname(){

		}
	}

	$csStd = new CSstudent();
	$csStd->dept;

	$s1 = new Student();
	$s2 = new Student('ABC', '111-111');
	$s3 = new Student('ABC', '111-111', 4);
	echo $s1->getName();

