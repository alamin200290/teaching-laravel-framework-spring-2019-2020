<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index(Request $req){
    	return view('login.index');
    }

    public function verify(Request $req){
    	
    	if($req->uname == $req->password){

            $req->session()->put('uname', $req->uname);
    		return redirect()->route('home.index');

    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		//return view('login.index');
            return redirect('/login');
    	}
    }
}
