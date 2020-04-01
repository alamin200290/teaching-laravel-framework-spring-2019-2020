<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facdes\DB;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{

    public function index(Request $req){

		//$data = array('name'=>'alamin', 'type'=> 'admin');    	
		//$data = ['name'=>'alamin', 'type'=> 'admin']; 

/*    	return view('home.index')
    			->with('name', 'alamin')
    			->with('type', 'admin');*/

/*     	return view('home.index')
    			->withName('alamin')
    			->withType('admin');*/
    	
    /*	$v = view('home.index');
    	$v->withName('alamin');
    	$v->withType('admin');
    	return $v;*/

        //session 
        
        /*
        $req->session()->put('username', 'alamin');
        $req->session()->put('password', 'aaaa');
        $data = $req->session()->get('username');
        $req->session()->forget('username');
        $req->session()->flush();
        $req->session()->flash('msg', 'invalid username/password');
        $req->session()->flash('error', 'invalid');
        $req->session()->keep('msg');
        $req->session()->reflash();
        $req->session()->pull('username');
        //$data = $req->session()->all();
        if($req->session()->has('username')){
        }*/

        //session('cgpa', 4);

        if(!$req->session()->has('username')){
            return redirect('/login');
        }

        return view('home.index');
    }

    public function show($id){
        /*$students = $this->getStudentList();
        $s="";
        foreach ($students as $std) {
            if($std['id'] == $id){
                $s = $std;
                break;
            }
        }*/

        $s = User::find($id);
        return view('home.show', $s);
    }

    public function add(){
        return view('home.add');
    }

    public function create(Request $req){


        if($req->hasFile('pic')){
            $file = $req->file('pic');

            echo "File Name: ".$file->getClientOriginalName()."<br>";
            echo "File Extension: ".$file->getClientOriginalExtension()."<br>";
            echo "File Size: ".$file->getSize()."<br>";
            echo "File Mime Type: ".$file->getMimeType();

            if($file->move('upload', $file->getClientOriginalName())){
                echo "<h2>Success</h2>";
            }else{
                echo "<h2>Error</h2>";
            }
        }


       /* $req->validate([
            'username'=>'bail|required|min:4|unique:users',
            'password'=>'required',
            'cgpa'=>'required',
            'name'=>'required|email'
        ]);*/

/*    
        $validation = $this->validate($req, [
            'username'=>'required',
            'password'=>'required',
            'cgpa'=>'required',
            'name'=>'required'
        ])->validate();

        //$validation->validate();*/

        /*$validation = Validator::make($req->all(), [
            'username'=>'required',
            'password'=>'required',
            'cgpa'=>'required',
            'name'=>'required'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
            return redirect()->route('home.add')
                            ->with('errors', $validation->errors())
                            ->withInput();
        }*/


/*        $user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name     = $req->name;
        $user->cgpa     = $req->cgpa;
        $user->dept     = $req->dept;
        $user->type     = $req->type;
        
        if($user->save()){
            return redirect()->route('home.list');
        }else{
            return redirect()->route('home.add');
        }*/
    }

    public function edit($id){
        $user = User::find($id);
        return view('home.edit', $user);
    }

    public function update($id, Request $req){

        $user = User::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name     = $req->name;
        $user->cgpa     = $req->cgpa;
        $user->dept     = $req->dept;
        $user->type     = $req->type;

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
        $users = User::all();
        return view('home.view_users', ['std'=>$users]);
    }

    public function getStudentList(){
        return [
            ['id'=>'12','name'=>'alamin','cgpa'=>2.4,'dept'=>'CS'],
            ['id'=>'14','name'=>'RAKIB','cgpa'=>2.4,'dept'=>'CIS'],
            ['id'=>'15','name'=>'XYZ','cgpa'=>2.4,'dept'=>'CS'],
            ['id'=>'16','name'=>'ABC','cgpa'=>2.4,'dept'=>'CSE'],
            ['id'=>'13','name'=>'sadsdj','cgpa'=>2.4,'dept'=>'CSSE']
        ];
    }
}
