<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginController extends Controller
{
    
    public function index(Request $req){
    	return view('login.index');
    }

    public function verify(Request $req){
    	
 /*       $req->uname 
        $req->password*/

        //$data = User::all();

/*        $user = User::where('username', $req->uname)
                    ->where('password', $req->password)
                    ->first();*/

        $user = DB::table('users')
                    ->where('username', $req->uname)
                    ->where('password', $req->password)
                    ->first();

    	if($user != null){
            $req->session()->put('uname', $req->uname);
    		return redirect()->route('home.index');

    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		//return view('login.index');
            return redirect('/login');
    	}
    }
}
