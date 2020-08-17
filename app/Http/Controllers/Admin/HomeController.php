<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToursModel;
use App\Model\UserModel;
use App\Model\review;
use App\Model\destModel;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function getHome(){
        $tour = ToursModel::count();
        $user = UserModel::count();
        $review = review::count();
        $dest = destModel::count();
    	return view('backEnd.index',compact('tour','user','review','dest'));
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
