<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $req){
    	
    	//$req->session()->forget('uname');
    	$req->session()->flush();

    	return redirect('/login');
    }
}
