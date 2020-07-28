<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddTourRequest;
use App\Model\ToursModel;
use App\Model\destModel;
use App\Model\package;
use DB;

class ToursController extends Controller
{
    public function getTour(){
    	// $data['tour'] = DB::table('destination_tb')->join('Tours_tb','destination_tb.dest_id','=','Tours_tb.dest_id')->orderBy('tour_id','desc')->get();
        $tour = ToursModel::orderBy('tour_id','desc')->get();
    	return view('backEnd.tours',['tour'=>$tour]);
    }
    public function AddTour(){
        $data['destination'] = destModel::all();
    	$data['package'] = package::all()->where('status',1);
    	return view('backEnd.addtours',$data);
    }
    public function postAddTour(AddTourRequest $request){
    	$img = $request->img->getClientOriginalName();
        $j_en = json_encode($request->route);
        $route = ($request->route)? $j_en :'';
    	$tour	=	new ToursModel;
    	$tour->tour_name 	=	$request->name;
    	$tour->dest_id 		=	$request->dest_id;
    	$tour->tour_sumary 	=	$request->sumary;
    	$tour->tour_content =	$request->description;
    	$tour->tour_image 	=	$img;
    	$tour->tour_price 	=	$request->price;
    	$tour->tour_day 	=	$request->day;
        $tour->maps         =   $request->maps;
        $tour->status       =   $request->status;

        $tour->package      =   $route;

    	$tour->list_tags 	=	str_slug($request->name);
    	$tour->save();
    	$request->img->storeAs('image',$img);
    	return back();
    }
    public function getEditTour($id){
    	$data['tour'] = ToursModel::find($id);
    	$data['dest'] = destModel::all();
        $data['package'] = package::all()->where('status',1);
    	return view('backEnd.edittours',$data);
    }
    public function postEditTour(Request $request,$id){
        $j_en = json_encode($request->route);
        $route = ($request->route)? $j_en : '';
    	$tour	=	new ToursModel;
    	$arr['tour_name'] = $request->name;
    	$arr['list_tags'] = str_slug($request->name);
    	$arr['dest_id'] = $request->dest_id;
    	$arr['tour_sumary'] = $request->sumary;
    	$arr['tour_content'] = $request->description;
    	$arr['tour_price'] = $request->price;
    	$arr['tour_day'] = $request->day;
        $arr['maps'] = $request->maps;
        $arr['status'] = $request->status;
        
    	$arr['package'] = $route;
        
    	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['tour_image'] = $img;
    		$request->img->storeAs('image',$img);
    	}
    	$tour::where('tour_id',$id)->update($arr);
    	return redirect('admin/tours');
    }
    public function getDeleteTour($id){
    	ToursModel::destroy($id);
    	return back();
    }


// addpackage
    public function getAddPackages(){
        $data['pac'] = package::all();
        return view('backEnd.package_tour',$data);
    }
    public function postAddPackages(AddTourRequest $request){
        $pac = new package;
        $pac->pac_name = $request->name;
        $pac->status = $request->status;
        $pac->save();
        return back();
    }
    public function getEditPackages($id){
        $data= package::find($id);
        return view('backEnd.editpackage',['data'=>$data]);
    }
    public function postEditPackages(Request $request,$id){
        $data = new package;
        $arr['pac_name'] = $request->name;
        $arr['status'] = $request->status;
        $data::where('pac_id',$id)->update($arr);
        return redirect('admin/packages');
    }
    public function deletePackages($id){
        package::destroy($id);
        return back();
    }
// addpackage
}
