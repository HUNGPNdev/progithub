<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\destModel;
use App\Http\Requests\AddDestRequest;
use App\Http\Requests\EditDestRequest;


class DestinationController extends Controller
{
    public function getDest(){
    	$data['listDest'] = destModel::all();
    	return view('backEnd.destination',$data);
    }
    public function postDest(AddDestRequest $request){
    	$dest = new destModel;
    	$dest->dest_name = $request->name;
    	$dest->dest_slug = str_slug($request->name);
    	$dest->save();
    	return back();
    }

    public function getEditDest($id){
    	$data['dest'] = destModel::find($id);
    	return view('backEnd.editdestination',$data);
    }
    public function postEditDest(EditDestRequest $request,$id){
    	$dest = destModel::find($id);
    	$dest->dest_name = $request->name;
    	$dest->dest_slug = str_slug($request->name);
    	$dest->save();
    	return redirect()->intended('admin/destination');
    }

    public function getDeleteDest($id){
    	destModel::destroy($id);
    	return back();
    }

}
