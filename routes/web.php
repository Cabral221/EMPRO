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

    Route::get('/contact','ContactController@index')->name('user_contact');

    Route::get('/admission','AdmissionController@index')->name('user_admission');

    Route::get('/formation','FormationController@index')->name('user_formation');

    Route::get('/service','ServiceController@index')->name('user_service');

    Route::get('/about','AboutController@index')->name('user_about');

    Route::get('/realisation','RealisationController@index')->name('user_realisation');
});
