<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\listadmin;
use Illuminate\Http\Request;
use App\Http\Requests\AddGuider;
use App\Model\roles;
use App\Model\ad_roles;
use DB;
use Auth;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('admin_tb')->paginate(5);
        return view('backEnd.admin',compact('data'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = roles::all();
        return view('backEnd.add_admin',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'unique:admin_tb,name',
            'email' => 'unique:admin_tb,email',
            'password'=>'required',
            'conf_pas'=>'required|same:password'
        ];
        $messages = [
            'name.unique'=>'Admin has been dupplicated!',
            'email.unique'=>'Email has been dupplicated!',
            'password.required'=>'Please, Enter the password!',
            'conf_pas.required'=>'Please, Enter the password again!',
            'conf_pas.same'=>'Password incorrect, please try again!'
        ];
        $request->validate($rules,$messages);
  
        $admin = [
            'email'     =>   $request->email,
            'password'  =>   bcrypt($request->password),
            'name'      =>   $request->name,
            'phone'     =>   $request->phone,
            'address'   =>   $request->address,
            'birthday'  =>   $request->birthday,
            'gender'    =>   $request->gender,
            'status'    =>   $request->status
        ];

        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $admin['image'] = $img;
            $request->img->storeAs('admin',$img);
        }
        if($listadmin = listadmin::create($admin)){
            if(is_array($request->role)){
            foreach($request->role as $roles_id){
                ad_roles::create(['admin_id'=>$listadmin->id,'roles_id'=>$roles_id]);
            }
        }
            return redirect()->route('admin.listadmin.index')->with('success','Add admin succesfully!');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\listadmin  $listadmin
     * @return \Illuminate\Http\Response
     */
    public function show(listadmin $listadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\listadmin  $listadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(listadmin $listadmin)
    {
        // $ad_rol = $listadmin->getRoles;
        $roles = roles::all();
        $rolesAdmin = ad_roles::where('admin_id',$listadmin->id)->get();
        return view('backEnd.edit_admin',compact('listadmin','roles','rolesAdmin'));
    } 
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\listadmin  $listadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, listadmin $listadmin, ad_roles $ad_roles)
    {

        $rules = [
            'name' => 'required',
            'email'=> 'required'
        ];
        $messages = [];
        if($request->password){
            $rules['conf_pas'] = 'required|same:password';
            $messages['conf_pas.required'] ='Please, Enter the password again!';
            $messages['conf_pas.same'] ='Password incorrect, please try again!';
        }
        $request->validate($rules,$messages);

        
        $arr['email'] = $request->email;
        $arr['password'] = $request->password ? bcrypt($request->password) : $listadmin->password;
        $arr['name'] = $request->name;
        $arr['phone'] = $request->phone;
        $arr['address'] = $request->address;
        $arr['birthday'] = $request->birthday;
        $arr['gender'] = $request->gender;
        $arr['status'] = $request->status;

        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $request->img->storeAs('admin',$img);
            $arr['image'] = $img;
        }
        
        $listadmin->update($arr);

        if(is_array($request->role)){
            DB::table('ad_roles')->where('admin_id',$listadmin->id)->delete();
            foreach($request->role as $roles_id){
                ad_roles::create(['admin_id'=>$listadmin->id,'roles_id'=>$roles_id]);
            }
        }else{
            DB::table('ad_roles')->where('admin_id',$listadmin->id)->delete();
            ad_roles::create(['admin_id'=>$listadmin->id,'roles_id'=>$request->role]);
        }

        return redirect()->route('admin.listadmin.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\listadmin  $listadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(listadmin $listadmin,ad_roles $ad_roles, $id)
    {
        try{
            DB::beginTransaction();
            DB::table('ad_roles')->where('admin_id',$id)->delete();
            DB::table('admin_tb')->where('id',$id)->delete();
            DB::commit();
            return back();
        } catch(Exception $e){
            return back();
        }
    }

    public function error()
    {
        
        return view('backEnd.error');
    }
}
