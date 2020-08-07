<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddGuider;
use App\Model\guider;

class TourGuiderController extends Controller
{
    public function tourguider(){
        $data['guider'] = guider::all();
    	return view('backEnd.tourguider',$data);
    }
    public function posttourguider(AddGuider $request){
    	$img = $request->img->getClientOriginalName();
    	$tour = new guider;
    	$tour->guider_name = $request->name;
    	$tour->status = $request->status;
    	$tour->images 	= $img;
    	$tour->facebook = $request->facebook;
    	$tour->twiter = $request->twiter;
    	$tour->instagram = $request->instagram;
    	$tour->save();
    	$request->img->storeAs('image',$img);
    	return back();
    }
    public function EditTourguider($id){
        $data['guider'] = guider::find($id);
        return view('backEnd.editguider',$data);
    }
    public function postEditTourguider(Request $request,$id){
        $guider = new guider;
        $arr['guider_name'] = $request->name;
        $arr['status'] = ($request->status==1)?1:0;
        $arr['facebook'] = $request->facebook;
        $arr['twiter'] = $request->twiter;
        $arr['instagram'] = $request->instagram;
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['images'] = $img;
            $request->img->storeAs('image',$img);
        }
        $guider::where('guider_id',$id)->update($arr);
        return redirect()->intended('admin/guider');
    }
    public function DeleteTourguider($id){
        guider::destroy($id);
        return redirect('admin/guider');
    }
}
