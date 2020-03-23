<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

		//$data = array('name'=>'alamin', 'type'=> 'admin');    	
		//$data = ['name'=>'alamin', 'type'=> 'admin']; 
    	//return view('home.index', $data);

/*    	return view('home.index')
    			->with('name', 'alamin')
    			->with('type', 'admin');*/

/*     	return view('home.index')
    			->withName('alamin')
    			->withType('admin');*/
    	
    	$v = view('home.index');
    	$v->withName('alamin');
    	$v->withType('admin');
    	return $v;
    }
}
