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

// Route::get('/', function () {
//     return view('user/welcome');
// });

Route::group(['namespace' => 'User'],function(){
    Route::get('/','HomeController@index')->name('user_home');

    Route::resource('/contact','ContactController');

    Route::resource('/admission','AdmissionController');

    Route::get('/formation','FormationController@index')->name('user_formation');
    Route::get('/formation_show','FormationController@show')->name('formation_show');

    Route::get('/service','ServiceController@index')->name('user_service');

    Route::get('/about','AboutController@index')->name('user_about');

    Route::get('/realisation','RealisationController@index')->name('user_realisation');
});


Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('/', 'Admin\HomeController@index')->name('home');
});
