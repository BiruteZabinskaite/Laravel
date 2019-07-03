<?php

use Illuminate\Http\Request;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
//Route::get('/', function () {
//    return view('autos.autos');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'AutoController@index')->name('home');
Route::get('/autos', 'AutoController@index')->name('autos');
Route::get('/owners', 'OwnerController@index')->name('owners');

//
//Route::get('/showAutos','AutoController@showAuto' )->name('showAutos');
//Route::post('/insertProduct', 'ProductController@insertProduct');
//
Route::resource('auto', 'AutoController');
Route::resource('owner', 'OwnerController');


//kad loginas tam tikroje vietoje isijungtu
//Route::resource('owner', 'OwnerController')
//->except('edit')
//    ->middleware('auth','auth.admin');

//Route::get('/shop/{id}/edit', ShopController@edit)
//->middleware('auth','auth.admin')
//->name('shop.edit');

//routu grupe

//Route::group(['middleware'=>'auth'], function(){
//    routai
//});


Route::get('/changeLanguage/{lang}','LanguageController@changeLanguage')->name('changeLanguage');


//paveiksliuko uzkrovimas loc../autoImage/foto.jpg
Route::get('/autoImage/{file}','AutoController@showAuto')->name('autoImage');