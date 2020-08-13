<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function getHome(){
    	return view('backEnd.index');
    }
    public function getlogout(){
        Auth::guard("web")->logout();
    	return redirect()->intended('loginad');
    }

    // admin
    public function listadmin(){
    	return view('backEnd.admin');
    }
}
