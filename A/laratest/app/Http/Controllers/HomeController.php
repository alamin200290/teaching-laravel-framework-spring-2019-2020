<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){

		//$data = ['id'=>'11-11-1', 'name'=>'amin', 'dept'=>'CSE'];
		//return view('home.index', $data);

		/*return view('home.index')
				->with('id', '12-333-4')
				->with('name', 'alamin')
				->with('dept', 'SE');*/

/*		return view('home.index')
				->withId('12-333-4')
				->withName('alamin')
				->withDept('SE');*/

		/*$v = view('home.index');
		$v->withId('222-222');
		$v->withName('amin');
		$v->withDept('CIS');
		return $v;*/

		return view('home.index');
	}    

	public function list(){

		$students = $this->getStudentList();
		return view('home.view_users', ['stds'=> $students]);
	}

	public function edit($id, Request $req){
	
		$students = $this->getStudentList();
		$std="";
		for($i=0; $i< count($students); $i++){
			if($students[$i]['id'] == $id){
				$std = $students[$i];
				break;
			}
		}
		return view('home.edit', $std);
	}

	function getStudentList (){
		return [
				['id'=>'12','name'=>'abc','cgpa'=>2.4,'dept'=>'CS'],
				['id'=>'13','name'=>'XYZ','cgpa'=>2.8,'dept'=>'CSSE'],
				['id'=>'14','name'=>'PQR','cgpa'=>2.9,'dept'=>'CSE'],
				['id'=>'125','name'=>'aaa','cgpa'=>2.6,'dept'=>'CIS']
		];
	}
}
