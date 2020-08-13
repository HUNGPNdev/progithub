<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ToursModel;
use App\Model\Blog_Model;
use App\Model\destModel;
use App\Model\guider;
use Illuminate\Support\Arr;
use App\Model\banner;
use DB;

class ServiceController extends Controller
{
	public function getService(){
		$data['guider'] = guider::where('status',1)->get();
		$data['banner'] = banner::where('banner_id',3)->first('banner_img');
		return view('frontEnd.service',$data);
	}

	public function getGallery(){
		$data['banner'] = banner::where('banner_id',4)->first('banner_img');
		return view('frontEnd.gallery',$data);	
	}

	public function getBlog(){
		$data = banner::where('banner_id',5)->first('banner_img');
		// $blog = Blog_Model::where('status',1)->orderBy('id','desc')->get();
		$blog = DB::table('blog_tb')->where('blog_tb.status',1)->orderBy('blog_tb.id_blog','desc')->join('admin_tb','blog_tb.id_ad','=','admin_tb.id')->get();
		// $admin= 
		return view('frontEnd.blog',compact('blog','data'));
	}

	public function getBlog_Single($id){
		$data['banner'] = banner::where('banner_id',5)->first('banner_img');
		$data['data'] = Blog_Model::find($id);
		$data['list_tags'] = ToursModel::where('status',1)->take(9)->get();
		$data['dest'] = destModel::take(5)->get();
		$data['itg'] = Blog_Model::all()->random()->take(16)->get();
		$data['review'] = Blog_Model::where('status',1)->orderBy('id_blog','desc')->take(3)->get();
		return view('frontEnd.blog_single',$data);
	}
	public function SearchBlog(Request $request){
		$data['banner'] = banner::where('banner_id',5)->first('banner_img');
		$a = $request->search;
		$result = str_replace(' ', '%', $a);
		$data['key'] = $a;
		$data['search'] = Blog_Model::join('admin_tb','blog_tb.id_ad','=','admin_tb.id')->where([
			['title','like','%'.$result.'%'],
			['blog_tb.status','=',1],
		])->get();
		return view('frontEnd.blogsearch',$data);
	}

	public function getAbout(){
		$data['guider'] = guider::where('status',1)->get();
		$data['banner'] = banner::where('banner_id',6)->first('banner_img');
		return view('frontEnd.about',$data);
	}

	public function getFAQs(){
		$data['banner'] = banner::where('banner_id',7)->first('banner_img');
		return view('frontEnd.faq',$data);
	}

	public function getContact(){
		$data['banner'] = banner::where('banner_id',8)->first('banner_img');
		return view('frontEnd.contact',$data);
	}
}
