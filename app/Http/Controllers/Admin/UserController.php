<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;

class UserController extends Controller
{
    public function getuser(){
    	$data = UserModel::paginate(5);
    	return view('backend.users',compact('data'));
    }

    public function DeleteUser($id){
    	UserModel::destroy($id);
    	return back();
    }
}
