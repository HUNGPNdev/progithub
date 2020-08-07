<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\roles;
use Illuminate\Http\Request;
use Route;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = roles::all();
        $all = Route::getRoutes();
        $route = [];
        foreach($all as $r){
            $name = $r->getName();
            $pos = strpos($name, 'admin.');
            if($pos !== false &&  !in_array($name, $route)){
                array_push($route,$name);
            }
        }
        // dd($route);
        return view('backEnd.roles',compact('data','route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route = [];
        $all = Route::getRoutes();
        
        return view('backEnd.roles',compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'unique:roles,name'
        ],['name.unique' => 'Roles has been dupplicated!']); 
        array_push($request->route,'admin.home');
        $route = json_encode($request->route);
        roles::create(['name' => $request->name, 'permission' => $route]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(roles $roles, $id)
    {
        $data = roles::find($id);
        $per = json_decode($data->permission);
        $all = Route::getRoutes();
        $route = [];
        foreach($all as $r){
            $name = $r->getName();
            $pos = strpos($name, 'admin.');
            if($pos !== false &&  !in_array($name, $route)){
                array_push($route,$name);
            }
        }
        // dd($route);
        return view('backEnd.edit_role',compact('data','route','per'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roles $roles,$id)
    {
        $route = [];
        $request->validate([
            'name' => 'required'
        ],['name.required' => 'Fill role name in the input!']);
        $route = json_encode($request->route);

        $roles   =   new roles;
        $arr['name'] = $request->name;
        $arr['permission'] = $route;
        $roles::where('id',$id)->update($arr);

        return redirect()->route('admin.roles.index')->with('succcess','Edited permission successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(roles $roles)
    {
        //
    }
}
