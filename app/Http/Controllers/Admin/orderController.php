<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\order_tb;

class orderController extends Controller
{
    public function getorder_tb() {
    	$order = order_tb::all();
    	return view('backEnd.order_tb', compact('order'));
    }
    public function postdeleteorder($id) {
    	order_tb::where('id',$id)->delete($id);
    	return back()->with('success','Delete successfully!');
    }
}
