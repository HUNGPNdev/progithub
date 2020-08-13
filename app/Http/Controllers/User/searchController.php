<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ToursModel;
use App\Model\destModel;
use App\Model\package;
use App\Model\banner;
use DB;

class searchController extends Controller
{
    public function searchTour(Request $req){
    	
    	$tour = ToursModel::search()->paginate(12);
        $banner = banner::where('banner_id',2)->first('banner_img');
        $dest   = destModel::all();
    	return view('frontEnd.search-tour',compact('tour','banner','dest'));
    }
}
