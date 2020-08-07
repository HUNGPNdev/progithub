<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
use Auth;
use DB;
class UserLoginController extends Controller
{
	public function getlogin(){
		return view('frontEnd.login_user');
	}
	public function getuserlogout(){
		Auth::guard("users_tb")->logout();
		return back();
	}
	public function postuserlogin(Request $request){
		$arr = ['email' => $request->email, 'password' => $request->password];
    	if($request->remember == 'Remember Me'){
    		$remember = true;
    	}else{
    		$remember = false;
    	}
    	$user = UserModel::where('email',$request->email)->value("name");
    	if(Auth::guard('users_tb')->attempt($arr, $remember)){
    		$request->session()->put("name",$user);
    		return redirect()->intended('home');
    	}else{
    		return back()->withInput()->with('error','User account or password is incorrect!');
    	}


	}

}
