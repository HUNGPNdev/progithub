<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\slider;

class SliderController extends Controller
{
    public function getSlider(){
    	$data = slider::all();
    	return view('backend.slider',compact('data'));
    }

    public function getAddSlider(){
    	return view('backend.addslider');
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
    	$slider = new slider;
    	$slider->slider_name = $req->name;
    	$slider->slider_img = $img;
    	$slider->slider_description = $req->description;
    	$slider->slider_status = $req->status;
    	$slider->save();
    	$req->img->storeAs('image.slider',$img);

    	return redirect()->route('admin.slider');
    }

    public function getEditSlider($id){
    	$data = slider::find($id);
    	return view('backend.editslider',compact('data'));
    }
    public function postEditSlider($id, Request $req){
    	$req->validate([
            'img' => 'image'
        ],[
            'img.image' => 'The image is malformed'
        ]);

    	$slider = new slider;
    	$arr['slider_name'] = $req->name;
    	$arr['slider_description'] = $req->description;
    	$arr['slider_status'] = $req->status;
        
        if($req->hasFile('img')){
            $img = $req->img->getClientOriginalName();
            $req->img->storeAs('image.slider',$img);
            $arr['slider_img'] = $img;
        }

        $slider->where('slider_id',$id)->update($arr);

        return redirect()->route('admin.slider');
    }

    public function getDelSlider($id){
    	slider::destroy($id);

    	return redirect()->route('admin.slider');
    }

    public function activeSlider($id){
    	slider::where('slider_id',$id)->update(['slider_status'=>1]);
    	return redirect()->route('admin.slider')->with('success','Active Slider successfully');
    }
    public function unactiveSlider($id){
    	slider::where('slider_id',$id)->update(['slider_status'=>0]);
    	return redirect()->route('admin.slider')->with('success','Unactive Slider successfully');
    }
}
