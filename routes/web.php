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

// Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/', 'HomeController@landingPage')->name('landing');
Route::get('/hotel/{hotel_slug}', 'HomeController@getHotelData')->name('index');
Route::get('/room/{id}', 'HomeController@getRoomData')->name('room_detatils');
Route::get('/hotel/{hotel_slug}/restaurants', 'HomeController@getAllRestaurants')->name('restaurants.all');
Route::get('/hotel/{hotel_slug}/meet-rooms', 'HomeController@getMeetRooms')->name('meet_rooms');
Route::get('/hotel/{hotel_slug}/restaurants/{id}', 'HomeController@getRestaurantData')->name('restaurant.details');
Route::get('/hotel/{hotel_slug}/restaurants/{id}/downloadFile', 'HomeController@downloadRestaurantFile')->name('restaurant.downloadFile');
Route::get('/hotel/{hotel_slug}/page/{page}', 'HomeController@viewPage')->name('hotel.viewPage');
Route::get('/hotel/{hotel_slug}/contact_us', 'HomeController@contact_us')->name('hotel.contact_us');
Route::post('/hotel/{hotel_slug}/contact_us', 'HomeController@contact_us_post')->name('hotel.contact_us_post');

Route::post('/locale', function(){
    
    Session::put('locale', request()->locale);
    
    return redirect()->back();
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes(['register' => false]);
});

Route::group(['prefix' => 'admin','resource' => 'Admin','middleware' => 'auth'], function () {

    Route::get('/', 'Admin\AdminController@index')->name('dashboard');

    Route::get('article-categories/grid', 'Admin\ArticleCategoryController@grid')->name("article-categories.grid");
    Route::resource('article-categories', 'Admin\ArticleCategoryController');
    
    Route::resource('rooms', 'Admin\RoomController')->except('show');
    Route::get('rooms/grid', 'Admin\RoomController@grid')->name("rooms.grid");
    Route::get('rooms/delete/{id}', 'Admin\RoomController@delete')->name("rooms.delete");
    
    Route::resource('meet-rooms', 'Admin\MeetRoomController')->except('show');
    Route::get('meet-rooms/grid', 'Admin\MeetRoomController@grid')->name("meet-rooms.grid");
    Route::get('meet-rooms/delete/{id}', 'Admin\MeetRoomController@delete')->name("meet-rooms.delete");


    Route::resource('restaurants', 'Admin\ResturantController')->except('show');
    Route::get('restaurants/grid', 'Admin\ResturantController@grid')->name("restaurants.grid");
    
    Route::get('news/{id}/gallery', 'Admin\NewsController@gallery')->name("news.gallery");
    Route::get('news/{id}/create-gallery', 'Admin\NewsController@createGallery')->name("news.gallery.create");
    Route::post('news/{id}/gallery', 'Admin\NewsController@storeGallery')->name("news.gallery.store");
    Route::get('news/{id}/gallery/{gallery}', 'Admin\NewsController@deleteGallery')->name("news.gallery.delete");
    Route::resource('news', 'Admin\NewsController');

    
    
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
    Route::get('facilities/delete/{id}', 'Admin\FacilityController@delete')->name("facilities.delete");

    Route::get('hotels/grid', 'Admin\HotelController@grid')->name("hotels.grid");
    Route::get('hotels/change-active/{id}', 'Admin\HotelController@changeActive')->name("hotels.change-active");
    Route::get('hotels/delete/{id}', 'Admin\HotelController@delete')->name("hotels.delete");
    Route::resource('hotels', 'Admin\HotelController');
    
    Route::get('hotels/{id}/gallery', 'Admin\HotelController@gallery')->name("hotels.gallery");
    Route::get('hotels/{id}/create-gallery', 'Admin\HotelController@createGallery')->name("hotels.gallery.create");
    Route::post('hotels/{id}/gallery', 'Admin\HotelController@storeGallery')->name("hotels.gallery.store");
    Route::get('hotels/{id}/gallery/{gallery}', 'Admin\HotelController@deleteGallery')->name("hotels.gallery.delete");    
    
    Route::get('hotels/{id}/pages', 'Admin\HotelController@pages')->name("hotels.pages");
    Route::get('hotels/{id}/page/{page}', 'Admin\HotelController@showPage')->name("hotels.pages.show");
    Route::post('hotels/{id}/page', 'Admin\HotelController@updatePage')->name("hotels.pages.store");

    Route::get('guest-reviews/grid', 'Admin\GuestReviewController@grid')->name("guest-reviews.grid");
    Route::resource('guest-reviews', 'Admin\GuestReviewController');
    Route::get('guest-reviews/delete/{id}', 'Admin\GuestReviewController@delete')->name("guest-reviews.delete");

   
    
    Route::get('app-settings', 'Admin\AppSettingController@getAll')->name('settings.index');
    Route::post('app-settings', 'Admin\AppSettingController@store')->name('settings.store');
    
    Route::resource('sliders', 'Admin\SliderController')->except('show');
    Route::get('sliders/grid', 'Admin\SliderController@grid')->name("sliders.grid");
    Route::get('/sliders/{id}/suspend','Admin\SliderController@suspend');
    Route::get('/sliders/{id}/activate','Admin\SliderController@activate');
    Route::post('/sliders/update/{id}','Admin\SliderController@update');

});
