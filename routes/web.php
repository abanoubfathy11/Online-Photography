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

Route::get('/','homePageController@showAll');

Route::get('/Home','homePageController@showAll');



Route::get('/Information', 'infopageController@showAll');

Route::post('/updateInfo','infopageController@update');

Route::get('/Portfolios',function (){
    return view('portfolios');
});

Route::get('/WeddingPortfolio','gallaryController@showAllWed');
Route::get('/SessionsPortfolio','gallaryController@showAllSes');
Route::get('/OtherPortfolio','gallaryController@showAllOth');

Route::post('/update','homepageController@update');

//Route::get('/admin','homepageController@edit');
Route::get('/admin','pagesController@index');


Route::get('/Review','reviewController@showAll');
Route::get('/applications','appController@showAll');
Route::get('/Contact','appcontroller@index');
Route::get('/updatecontact','contactpagecontroller@update');
Route::post('/addnew','appcontroller@store');

Route::post('/add','reviewController@store');



Route::get('/uploadfile','uploadefileController@index');

Route::post('uploadfile','uploadefileController@uploade');


Route::post('/addmember','memberController@store');






