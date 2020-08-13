<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = banner::all();
        return view('backend.banner',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.editbanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $img = $request->img->getClientOriginalName();
        $banner = new banner;
        $banner->banner_name = $request->name;
        $banner->banner_img = $img;
        $banner->save();
        $request->img->storeAs('image',$img);

        return redirect()->route('admin.banner.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {   
        $data = banner::find($banner->banner_id);
        return view('backend.editbanner',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banner $banner)
    {   
        $request->validate([
            'img' => 'image'
        ],[
            'img.image' => 'The image is malformed'
        ]);

        
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $request->img->storeAs('image',$img);
            $arr['banner_img'] = $img;
        }

        $banner->where('banner_id',$banner->banner_id)->update($arr);

        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(banner $banner)
    {
        //
    }
}
