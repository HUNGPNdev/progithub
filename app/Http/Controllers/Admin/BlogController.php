<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog_Model;
use Illuminate\Support\Arr;
use Auth;

class BlogController extends Controller
{
    public function getBlog(){
    	$data['blog'] = Blog_Model::all();
    	return view('backEnd.blog',$data);
    }
    public function getAddBlog(){
    	return view('backEnd.addblog');
    }
    public function DeleteBlog($id){
    	Blog_Model::destroy($id);
    	return back();
    }
    public function postAddBlog(Request $request){
    	$bn_img = $request->img->getClientOriginalName();
    	$image = $request->file('image_list');
    	$ar =  Array();
    	if($image != ''){
    		foreach($image as $img){
    			$ar[] = $img->getClientOriginalName();
    		}
    	}
    	if($request->image_list != ''){
    		foreach($request->image_list as $img){
    			$nn = $img->getClientOriginalName();
    			$img->storeAs('blog_img',$nn);
    		}
    	}
    		// dd($ar);
    	$imgs = json_encode($ar);
    	$arr = new Blog_Model;
    	$id_ad = Auth::user()->id;
    	$arr->id_ad = $id_ad;
    	$arr->bn_image = $bn_img;
    	$arr->status = $request->status;
    	$arr->images = $imgs;
    	$arr->title = $request->title;
    	$arr->slug = str_slug($request->title);
    	$arr->sumary = $request->sumary;
    	$arr->content = $request->content;
    	$arr->note = $request->note;
    	$request->img->storeAs('blog_img',$bn_img);
    	$arr->save();
    	return back();
    }
    public function EditBlogguider($id){
    	$data['data'] = Blog_Model::find($id);
    	return view('backEnd.editblog',$data);
    }
    public function PostEditBlogguider(Request $request, $id){
    	$tour = new Blog_Model;

    	$data = Blog_Model::find($id);
    	$image = $request->file('image_list');
    	$ar_img = Array();
    	if($image != ''){
    		foreach($image as $image){
    			$ar_img[] =  $image->getClientOriginalName();
    		}
    			$imgs = json_encode($ar_img);
    	}else{
    		$imgs = $data->images;
    	}
    	if($request->image_list != ''){
    		foreach ($request->image_list as $img) {
	    		$aimg = $img->getClientOriginalName();
	    		$img->storeAs('blog_img',$aimg);
    		}
    	}
    	$id_ad = Auth::user()->id;
    	$arr['id_ad'] = $id_ad;
    	$arr['images'] = $imgs;
    	$arr['status'] = $request->status;
    	$arr['title'] = $request->title;
    	$arr['slug'] = str_slug($request->title);
    	$arr['sumary'] = $request->sumary;
    	$arr['content'] = $request->content;
    	$arr['note'] = $request->note;

    	if($request->hasFile('img')){
    		$bn_img = $request->img->getClientOriginalName();
    		$request->img->storeAs('blog_img',$bn_img);
    		$arr['bn_image'] = $bn_img;
    	}

    	$tour::where('id',$id)->update($arr);
    	return redirect('admin/blog');
    }
}
