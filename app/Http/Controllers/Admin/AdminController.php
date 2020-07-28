<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\listadmin;
use Illuminate\Http\Request;
use App\Http\Requests\AddGuider;
use App\Model\roles;
use App\Model\ad_roles;
use DB;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $ad_rol = $listadmin->getRoles;
        $roles = roles::all();
        $ad_roles = ad_roles::all();
        return view('backEnd.edit_admin',compact('listadmin','roles','ad_roles'));
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
            'email'=> 'required',
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
            ad_roles::where('admin_id',$listadmin->id)->delete();
            foreach($request->role as $roles_id){
                ad_roles::create(['admin_id'=>$listadmin->id,'roles_id'=>$roles_id]);
            }
        }

        return redirect()->route('admin.listadmin.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\listadmin  $listadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(listadmin $listadmin)
    {
        //
    }
}
