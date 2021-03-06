<?php

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

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Route::get('/', 'Admin\AdminController@index')->name('dashboard');

Route::get('/', 'HomeController@index')->name('dashboard');

Route::post('/locale', function(){
    // dd(request()->locale);
    // session(['locale' => request()->locale]);
    Session::put('locale', request()->locale);
    // dd(session('locale') );
    return redirect()->back();
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes(['register' => false]);
});

Route::group(['prefix' => 'admin','resource' => 'Admin','middleware' => 'auth'], function () {

    Route::get('/', 'Admin\AdminController@index')->name('dashboard');

    Route::get('article-categories/grid', 'Admin\ArticleCategoryController@grid')->name("article-categories.grid");
    Route::resource('article-categories', 'Admin\ArticleCategoryController');

    Route::get('​news​/grid', 'Admin\NewsController@grid')->name("​news​.grid");
    Route::get('​news​/{id}/gallery', 'Admin\NewsController@gallery')->name("​news​.gallery");
    Route::get('​news​/{id}/create-gallery', 'Admin\NewsController@createGallery')->name("​news​.gallery.create");
    Route::post('​news​/{id}/gallery', 'Admin\NewsController@storeGallery')->name("​news​.gallery.store");
    Route::get('​news​/{id}/gallery/{gallery}', 'Admin\NewsController@deleteGallery')->name("​news​.gallery.delete");
    Route::resource('​news​', 'Admin\NewsController');

    
    
    Route::resource('offers', 'Admin\OfferController');
    Route::get('offers/{id}/gallery', 'Admin\OfferController@gallery')->name("offers.gallery");
    Route::get('offers/{id}/create-gallery', 'Admin\OfferController@createGallery')->name("offers.gallery.create");
    Route::post('offers/{id}/gallery', 'Admin\OfferController@storeGallery')->name("offers.gallery.store");
    Route::get('offers/{id}/gallery/{gallery}', 'Admin\OfferController@deleteGallery')->name("offers.gallery.delete");
    Route::resource('offers-categories', 'Admin\OfferCategoryController');

    Route::resource('events', 'Admin\EventController');
    Route::get('events/{id}/gallery', 'Admin\EventController@gallery')->name("events.gallery");
    Route::get('events/{id}/create-gallery', 'Admin\EventController@createGallery')->name("events.gallery.create");
    Route::post('events/{id}/gallery', 'Admin\EventController@storeGallery')->name("events.gallery.store");
    Route::get('events/{id}/gallery/{gallery}', 'Admin\EventController@deleteGallery')->name("events.gallery.delete");

    Route::get('services/grid', 'Admin\ServiceController@grid')->name("services.grid");
    Route::resource('services', 'Admin\ServiceController');

    Route::get('facilities/grid', 'Admin\FacilityController@grid')->name("facilities.grid");
    Route::resource('facilities', 'Admin\FacilityController');

    Route::get('hotels/grid', 'Admin\HotelController@grid')->name("hotels.grid");
    Route::resource('hotels', 'Admin\HotelController');

   
    
    Route::get('app-settings', 'Admin\AppSettingController@getAll')->name('settings.index');
    Route::post('app-settings', 'Admin\AppSettingController@store')->name('settings.store');
    
    Route::resource('sliders', 'Admin\SliderController')->except('show');
    Route::get('sliders/grid', 'Admin\SliderController@grid')->name("sliders.grid");
    Route::get('/sliders/{id}/suspend','Admin\SliderController@suspend');
    Route::get('/sliders/{id}/activate','Admin\SliderController@activate');
    Route::post('/sliders/update/{id}','Admin\SliderController@update');

});
