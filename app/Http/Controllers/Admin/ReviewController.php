<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\review;
use DB;

class ReviewController extends Controller
{
    public function getReview(){
    	$review = DB::table('review')->join('users_tb','users_tb.id','=','review.user_id')->paginate(10);
    	return view('backEnd.review',compact('review'));
    }

    public function deleteReview($id){
    	review::destroy($id);
    	return back();
    }

    public function activeReview($id){
    	review::where('review_id',$id)->update(['review_status'=>1]);
    	return redirect()->route('admin.adminReview')->with('success','Active Slider successfully');
    }
    public function unactiveReview($id){
    	review::where('review_id',$id)->update(['review_status'=>0]);
    	return redirect()->route('admin.adminReview')->with('success','Unactive Slider successfully');
    }
}
