<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $req){

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


		//$req->session()->put('uname', 'alamin');
		//$req->session()->put('password', '123');
		//$user = $req->session()->get('uname');
		//$pass = $req->session()->get('password');
		//$data = $req->session()->all();
		//$data = $req->session()->pull('uname');
		//$req->session()->forget('uname');
		//$req->session()->flush();
		//$req->session()->has('uname');
		//$req->session()->flash('cgpa', '4');
		//$req->session()->flash('abc', '4');
		//$req->session()->keep('cgpa');
		//$req->session()->reflash();
		
		if($req->session()->has('uname')){
			return view('home.index');
		}else{
			return redirect('/login');
		}
	}   

	public function show($id){

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

	public function update($id, Request $req){

	}

	public function delete($id){

	}	

	public function destroy($id){

	}

	public function list(){

		$students = $this->getStudentList();
		return view('home.view_users', ['stds'=> $students]);
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
