<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\HomeRequest;
use Validator;

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

		$user = User::find($id);
		return view('home.details', $user);
	}
	
	public function add(){

		return view('home.add');
	}

	public function insert(Request $req){

		/*$req->validate([
			'username'=>'bail|required|min:5|unique:users',
			'password'=>'required',
			'name'=>'required',
			'cgpa'=>'required'
		]);
*/
		/*$validation = $this->validate($req, [
			'username'=>'bail|required|min:5|unique:users',
			'password'=>'required',
			'name'=>'required',
			'cgpa'=>'required'
		])->validate();*/

		//$validation->validate();

/*		$validation = Validator::make($req->all(), [
			'username'=>'bail|required|min:5|unique:users',
			'password'=>'required',
			'name'=>'required',
			'cgpa'=>'required'
		]);

		if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();

			return redirect()->route('home.add')
							->with('errors', $validation->errors())
							->withInput();		
		}*/

/*		$user 			= new User;
		$user->name 	= $req->name;
		$user->username = $req->username;
		$user->cgpa 	= $req->cgpa;
		$user->dept 	= $req->dept;
		$user->password = $req->password;
		$user->type 	= $req->type;

		if($user->save()){
			return redirect()->route('home.list');
		}else{
			return redirect()->route('home.add');
		}*/

		if($req->hasFile('pic')){
			$file = $req->file('pic');
			echo "File Name: ". $file->getClientOriginalName()."<br>";
			echo "File Extension: ". $file->getClientOriginalExtension()."<br>";
			echo "File Size: ". $file->getSize()."<br>";
			echo "File Mime Type: ". $file->getMimeType();

			if($file->move('upload', "abc.".$file->getClientOriginalExtension())){
				echo "<h1>success</h1>";
			}else{
				echo "<h1>Error!</h1>";
			}

		}else{
			echo "File not found!";
		}
	}

	public function edit($id){
	
		/*$students = $this->getStudentList();
		$std="";
		for($i=0; $i< count($students); $i++){
			if($students[$i]['id'] == $id){
				$std = $students[$i];
				break;
			}
		}*/

		$user = User::find($id);
		return view('home.edit', $user);
	}

	public function update($id, Request $req){
		$user = User::find($id);
		$user->name 	= $req->name;
		$user->username = $req->username;
		$user->cgpa 	= $req->cgpa;
		$user->dept 	= $req->dept;
		$user->password = $req->password;
		$user->type 	= $req->type;

		if($user->save()){
			return redirect()->route('home.list');
		}else{
			return redirect()->route('home.edit', $id);
		}
	}

	public function delete($id){
		$user = User::find($id);
		return view('home.delete', $user);
	}	

	public function destroy($id, Request $req){
		if(User::destroy($req->userId)){
			return redirect()->route('home.list');
		}else{
			return redirect()->route('home.delete', $id);
		}
	}

	public function list(){
		//$students = $this->getStudentList();
		$users = User::all();
		return view('home.view_users', ['users'=>$users]);
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
