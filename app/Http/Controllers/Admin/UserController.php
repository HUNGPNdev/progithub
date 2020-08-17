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

    public function activeUser($id){
    	UserModel::where('id',$id)->update(['check_register'=>0]);
    	return redirect()->route('admin.user.admin')->with('success','Active User successfully');
    }
    public function unactiveUser($id){
    	UserModel::where('id',$id)->update(['check_register'=>1]);
    	return redirect()->route('admin.user.admin')->with('success','Unactive User successfully');
    }
}
