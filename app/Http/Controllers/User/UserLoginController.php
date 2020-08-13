<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
use Auth;
<<<<<<< HEAD
=======
use Mail;
>>>>>>> 1f0fdcbb3282c9df2ac9d005ce944b7146aa0e09
use DB;
class UserLoginController extends Controller
{
	public function getlogin(){
<<<<<<< HEAD
=======
        $user = UserModel::all();
>>>>>>> 1f0fdcbb3282c9df2ac9d005ce944b7146aa0e09
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
<<<<<<< HEAD
    	$user = UserModel::where('email',$request->email)->value("name");
    	if(Auth::guard('users_tb')->attempt($arr, $remember)){
    		$request->session()->put("name",$user);
=======
        $id = UserModel::where('email',$request->email)->value("id");
    	$name = UserModel::where('email',$request->email)->value("name");
    	$img = UserModel::where('email',$request->email)->value("image");
    	$phone = UserModel::where('email',$request->email)->value("phone");
    	$gender = UserModel::where('email',$request->email)->value("gender");
    	if(Auth::guard('users_tb')->attempt($arr, $remember)){
            $request->session()->put("id",$id);
    		$request->session()->put("name",$name);
    		$request->session()->put("image",$img);
    		$request->session()->put("phone",$phone);
    		$request->session()->put("gender",$gender);
>>>>>>> 1f0fdcbb3282c9df2ac9d005ce944b7146aa0e09
    		return redirect()->intended('home');
    	}else{
    		return back()->withInput()->with('error','User account or password is incorrect!');
    	}


	}
<<<<<<< HEAD

=======
    // comment
    public function EditUser( Request $request, UserModel $UserModel, $id){
        $rules = [];
        $messages = [];
        if($request->password){
            $rules['oldpass'] = 'required';
            $rules['conf_pas'] = 'required|same:password';
            $messages['oldpass.required'] ='Password incorrect, please try again!';
            $messages['conf_pas.required'] ='Please, Enter the password again!';
            $messages['conf_pas.same'] ='Password incorrect, please try again!';
        }
        $request->validate($rules,$messages);
        $user   =   new UserModel;
        $user = UserModel::find($id);
        $arr['name'] = $request->name;
        $arr['password'] = $request->password ? bcrypt($request->password) : $user->password;
        $arr['phone'] = $request->phone;
        $arr['gender'] = $request->gender;

        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $request->img->storeAs('users',$img);
            $arr['image'] = $img;
        }
        
        $user::where('id',$id)->update($arr);
        return back();
    }
	// register
	public function post_register(Request $request){
		dd($request->all());
	}
    public function forgetpass(){
        return view('frontEnd.forgetpass');
    }
    public function postforgetpas(Request $request){
        $email = $request->email;
        $user = UserModel::all();
        $key =[];
        foreach ($user as $user) {
            $key[] = $user->email;
        }
        if(in_array($email, $key)){
            $us = UserModel::where('email',$email)->value('password');
            $url = route('changepass',['code'=>$us]);
            $data = [
                'route' => $url,
            ];

            Mail::send('frontEnd.pass_forget', $data, function ($message) use($email) {
            $message->from('c1909i2bkap@gmail.com', 'C1909I2');
        
            $message->to($email, $email);
        
            // $message->cc('john@johndoe.com', 'John Doe');
        
            $message->subject('Change Password Require?');
        
        });
            return back()->with('success','Please check your mail to continue!');
        }else{
            return back()->with('error','Email incorect, Please see again!');
        }
    }
    public function changepass(Request $request){
        $code = $request->code;
        $user = UserModel::all();
        $key = [];
        foreach ($user as $user) {
            $key[] = $user->password;
        }
        $us = UserModel::where('password',$code)->value('password');
        if(in_array($code, $key)){
            return view('frontEnd.change_pass',['data'=>$request->code]);
        }else{
            return view('frontEnd.forgetpass');
        }
    }
    public function postchangepass(Request $request){
        $rules = [
            'password'=>'required',
            'cof_pass'=>'required|same:password'
        ];
        $messages = [
            'password.required'=>'Please, Enter the password!',
            'cof_pass.required'=>'Please, Enter the password again!',
            'cof_pass.same'=>'Password incorrect, please try again!'
        ];
        $request->validate($rules,$messages);
        $code = $request->code;
        $user   =   new UserModel;
        $arr['password'] = bcrypt($request->password);
        $user::where('password',$code)->update($arr);
        return redirect()->route('userlogin')->with('success','Change password successfuly, Please login!');
    }
>>>>>>> 1f0fdcbb3282c9df2ac9d005ce944b7146aa0e09
}
