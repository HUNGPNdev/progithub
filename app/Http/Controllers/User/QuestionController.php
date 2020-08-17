<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\question;

class QuestionController extends Controller
{
    public function post_userQuestion(Request $request) {
    	question::create(['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,'question'=>$request->question]);
    	return back()->with('success','We have received your question, we will contact you as soon as possible!');
    }
    public function getuser_question(Request $request) {
    	$question = question::all();
    	return view('backEnd.user_question',compact('question'));
    }
    public function deletequestion(Request $request) {
    	dd('a');
    }
}
