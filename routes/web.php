<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();


Route::group(['namespace' => 'User'], function() {
	Route::get('/','frontEndController@getHome');
	Route::get('home','frontEndController@getHome')->name('user');
    Route::post('search','searchController@searchTour')->name('searchtour');
    
    // logout
    Route::get('userlogout','UserLoginController@getuserlogout');

    Route::group(['prefix' => 'userlogin', 'middleware'=>'UserLoginCheck'], function() {
        // login
        Route::get('/','UserLoginController@getlogin')->name('userlogin');
        Route::post('/','UserLoginController@postuserlogin')->name('postuserlogin');;
        Route::get('user_register','UserLoginController@get_register')->name('get_register');
        Route::post('post_register','UserLoginController@post_register')->name('post_register');
        Route::get('post_mail_register','UserLoginController@post_mail_register')->name('post_mail_register');
        // post mail
        Route::get('forget','UserLoginController@forgetpass')->name('forgetpass');
        Route::post('forgetpas','UserLoginController@postforgetpas')->name('postforgetpas');
        Route::get('changepass','UserLoginController@changepass')->name('changepass');
        Route::post('postchangepass','UserLoginController@postchangepass')->name('postchangepass');
    });

	Route::group(['prefix' => 'user'], function() {
        // post mail
        Route::get('post_mail_index/{id}','UserLoginController@post_mail_index')->name('post_mail_index');
        Route::get('acc_post_mail_index}','UserLoginController@acc_post_mail_index')->name('acc_post_mail_index');
        Route::post('edit/{id}','UserLoginController@EditUser')->name('userlogin.edit');
		Route::group(['prefix' => 'tour'], function() {
			Route::get('tourdetail/{id}','frontEndController@getTourDetail');
            Route::post('review/{id}','frontEndController@postReview')->name('tour.review');
            Route::get('tourpackages','frontEndController@getTourpackages');
            Route::post('tourpackages/getpagetours','frontEndController@getpagetours')->name('getpagetours');
        });
        Route::group(['prefix' => 'cart'], function() {
            route::post('booking','bookingnowcontroller@postbooking')->name('cart.booking');
        });
        Route::get('service','ServiceController@getService');

        Route::get('gallery','ServiceController@getGallery');

        Route::get('blog','ServiceController@getBlog');
        Route::get('search','ServiceController@SearchBlog')->name('searchblog');

        Route::get('blog_single/{id}','ServiceController@getBlog_Single');

        Route::get('about','ServiceController@getAbout')->name('about');

        Route::get('faqs','ServiceController@getFAQs');

        Route::get('contact','ServiceController@getContact');
    });
});



Route::group(['namespace' => 'Admin'], function() {
    Route::group(['prefix' => 'loginad', 'middleware'=>'CheckLogedIn'], function() {
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });

    Route::get('logout','HomeController@getlogout');
    
        Route::get('error','AdminController@error')->name('error');

    Route::group(['prefix' => 'admin', 'middleware'=>'CheckLogedOut','as'=>'admin.'], function() {
        Route::get('home','HomeController@getHome')->name('home');

        Route::group(['prefix' => 'listadmin'], function() {
            Route::get('/','HomeController@listadmin')->name('listadmin');
        });
        Route::group(['prefix' => 'adminUser'], function() {
            Route::get('/','UserController@getuser')->name('user.admin');
            Route::get('delete/{id}','UserController@DeleteUser')->name('user.delete');

            Route::get('/active/{id}','UserController@activeUser')->name('user.active');
            Route::get('/unactive/{id}','UserController@unactiveUser')->name('user.unactive');
        });
        Route::group(['prefix' => 'destination'], function() {
        	Route::get('/','DestinationController@getDest')->name('destination');
        	Route::post('/','DestinationController@postDest')->name('destination.post');

        	Route::get('edit/{id}','DestinationController@getEditDest')->name('destination.edit');
        	Route::post('edit/{id}','DestinationController@postEditDest')->name('destination.postedit');

        	Route::get('delete/{id}','DestinationController@getDeleteDest')->name('destination.delete');
        });

        Route::group(['prefix' => 'tours'], function() {
        	Route::get('/','ToursController@getTour')->name('tours');
        	Route::get('add','ToursController@AddTour')->name('tours.add');
        	Route::post('add','ToursController@postAddTour')->name('tours.postadd');

        	Route::get('edit/{id}','ToursController@getEditTour')->name('tours.edit');
        	Route::post('edit/{id}','ToursController@postEditTour')->name('tours.postedit');

        	Route::get('delete/{id}','ToursController@getDeleteTour')->name('tours.delete');

            
        });
        Route::group(['prefix' => 'guider'], function() {
            Route::get('/','TourGuiderController@tourguider')->name('guider');
            Route::post('/','TourGuiderController@posttourguider')->name('guider.post');

            Route::get('edit/{id}','TourGuiderController@EditTourguider')->name('guider.edit');
            Route::post('edit/{id}','TourGuiderController@postEditTourguider')->name('guider.postedit');

            Route::get('delete/{id}','TourGuiderController@DeleteTourguider')->name('guider.delete');
        });
        Route::group(['prefix' => 'packages'], function() {
            Route::get('/','ToursController@getAddPackages')->name('packages');
            Route::post('/','ToursController@postAddPackages')->name('packages.post');

            Route::get('editpack/{id}','ToursController@getEditPackages')->name('packages.edit');
            Route::post('editpack/{id}','ToursController@postEditPackages')->name('packages.postedit');

            Route::get('delete/{id}','ToursController@deletePackages')->name('packages.delete');
        });
        Route::group(['prefix' => 'blog'], function() {
            Route::get('/','BlogController@getBlog')->name('blog');

            Route::get('add','BlogController@getAddBlog')->name('blog.add');
            Route::post('add','BlogController@postAddBlog')->name('blog.postadd');

            Route::get('edit/{id}','BlogController@EditBlogguider')->name('blog.edit');
            Route::post('edit/{id}','BlogController@PostEditBlogguider')->name('blog.postedit');

            Route::get('delete/{id}','BlogController@DeleteBlog')->name('blog.delete');
        });
        Route::group(['prefix'=>'slider'],function(){
            Route::get('/','SliderController@getSlider')->name('slider');
            Route::get('/active/{id}','SliderController@activeSlider')->name('slider.active');
            Route::get('/unactive/{id}','SliderController@unactiveSlider')->name('slider.unactive');

            Route::get('add','SliderController@getAddSlider')->name('slider.add');
            Route::post('add','SliderController@postAddSlider')->name('slider.add');

            Route::get('edit/{id}','SliderController@getEditSlider')->name('slider.edit');
            Route::post('edit/{id}','SliderController@postEditSlider')->name('slider.edit');

            Route::get('delete/{id}','SliderController@getDelSlider')->name('slider.delete');

            // slider customer
            Route::get('slider-customer','SliCusController@getSlider')->name('sliCus');
            Route::get('/active-customer/{id}','SliCusController@activeSlider')->name('sliCus.active');
            Route::get('/unactive-customer/{id}','SliCusController@unactiveSlider')->name('sliCus.unactive');

            Route::get('sliCus-add','SliCusController@getAddSlider')->name('sliCus.add');
            Route::post('sliCus-add','SliCusController@postAddSlider')->name('sliCus.add');

            Route::get('sliCus-edit/{id}','SliCusController@getEditSlider')->name('sliCus.edit');
            Route::post('sliCus-edit/{id}','SliCusController@postEditSlider')->name('sliCus.edit');

            Route::get('sliCus-delete/{id}','SliCusController@getDelSlider')->name('sliCus.delete');
        });

        Route::get('destroy/{id}','AdminController@destroy')->name('destroy');
        Route::get('delete/{id}','RoleController@delete')->name('roles.delete');
        Route::resources([
            'roles' => 'RoleController',
            'listadmin' => 'AdminController',
            'banner' => 'BannerController'
        ]);
    });


});
