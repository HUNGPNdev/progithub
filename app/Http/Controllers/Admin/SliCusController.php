<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\sliderCustomer;

class SliCusController extends Controller
{
    public function getSlider(){
    	$data = sliderCustomer::all();
    	return view('backend.slider_customer',compact('data'));
    }

    public function getAddSlider(){
    	return view('backend.add_slider_customer');
    }
    public function postAddSlider(Request $req){
    	$req->validate([
    		'img' => 'image',
    		'status' => 'required',
    	],[
    		'img.image' => 'Img has been image',
    		'status.required' => 'Field not null',
    	]);
    	$img = $req->img->getClientOriginalName();
    	$slider = new sliderCustomer;
    	$slider->slider_customer = $req->name;
    	$slider->slider_img = $img;
    	$slider->slider_description = $req->description;
    	$slider->slider_status = $req->status;
    	$slider->save();
    	$req->img->storeAs('image.slider',$img);

    	return redirect()->route('admin.sliCus');
    }

    public function getEditSlider($id){
    	$data = sliderCustomer::find($id);
    	return view('backend.editslicus',compact('data'));
    }
    public function postEditSlider($id, Request $req){
    	$req->validate([
            'img' => 'image'
        ],[
            'img.image' => 'The image is malformed'
        ]);

    	$slider = new sliderCustomer;
    	$arr['slider_customer'] = $req->name;
    	$arr['slider_description'] = $req->description;
    	$arr['slider_status'] = $req->status;
        
        if($req->hasFile('img')){
            $img = $req->img->getClientOriginalName();
            $req->img->storeAs('image.slider',$img);
            $arr['slider_img'] = $img;
        }

        $slider->where('slider_id',$id)->update($arr);

        return redirect()->route('admin.sliCus');
    }

    public function getDelSlider($id){
    	sliderCustomer::destroy($id);

    	return redirect()->route('admin.sliCus');
    }

    public function activeSlider($id){
    	sliderCustomer::where('slider_id',$id)->update(['slider_status'=>1]);
    	return redirect()->route('admin.sliCus')->with('success','Active Slider successfully');
    }
    public function unactiveSlider($id){
    	sliderCustomer::where('slider_id',$id)->update(['slider_status'=>0]);
    	return redirect()->route('admin.sliCus')->with('success','Unactive Slider successfully');
    }
}
