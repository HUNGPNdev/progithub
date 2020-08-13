<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ToursModel;
use App\Model\Blog_Model;
use App\Model\destModel;
use Illuminate\Support\Arr;
use DB;

class ServiceController extends Controller
{
	public function getService(){
		return view('frontEnd.service');
	}

	public function getGallery(){
		return view('frontEnd.gallery');
	}

	public function getBlog(){
		// $blog = Blog_Model::where('status',1)->orderBy('id','desc')->get();
    	$blog = DB::table('blog_tb')->where('blog_tb.status',1)->orderBy('blog_tb.id_blog','desc')->join('admin_tb','blog_tb.id_ad','=','admin_tb.id')->get();
		// $admin= 
		return view('frontEnd.blog',compact('blog'));
	}

	public function getBlog_Single($id){
		$data['data'] = Blog_Model::find($id);
		$data['list_tags'] = ToursModel::where('status',1)->take(9)->get();
		$data['dest'] = destModel::take(5)->get();
		$data['itg'] = Blog_Model::all()->random()->take(16)->get();
		$data['review'] = Blog_Model::where('status',1)->orderBy('id_blog','desc')->take(3)->get();
		return view('frontEnd.blog_single',$data);
	}
	public function SearchBlog(Request $request){
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
		return view('frontEnd.about');
	}

	public function getFAQs(){
		return view('frontEnd.faq');
	}

	public function getContact(){
		return view('frontEnd.contact');
	}
}
