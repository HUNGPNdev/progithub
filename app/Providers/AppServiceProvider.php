<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Blog_Model;

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
        $mblog = Blog_Model::orderBy('id_blog','desc')->get();
        view()->share('mblog',$mblog);
    }
}
