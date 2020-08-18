<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Blog_Model;
use App\Model\order_tb;
use App\Model\user_tb;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        view()->composer('*',function($view){
            $mblog = Blog_Model::orderBy('id_blog','desc')->get();
            $id = Auth::guard('users_tb')->id();
            $orders = order_tb::where('user_id',$id)->get();
            $view->with(compact('mblog','orders','id'));
        });
    }
}
