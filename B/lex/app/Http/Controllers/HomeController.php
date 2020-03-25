<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

		//$data = array('name'=>'alamin', 'type'=> 'admin');    	
		//$data = ['name'=>'alamin', 'type'=> 'admin']; 
    	return view('home.index');

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
    }

    public function list(){

        $students = $this->getStudentList();
        return view('home.view_users', ['std'=>$students]);
    }

    public function show($id){
        $students = $this->getStudentList();
        $s="";
        foreach ($students as $std) {
            if($std['id'] == $id){
                $s = $std;
                break;
            }
        }
        return view('home.show', $s);
    }

    public function add(){

    }

    public function create($id, Request $req){

    }

    public function edit($id){

    }

    public function update($id, Request $req){

    }

    public function delete($id){

    }

    public function destroy($id, Request $req){

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
