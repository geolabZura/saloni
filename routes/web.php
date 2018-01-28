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

Route::get('/', function () {
    return view('welcome');
});

//Route::group(['middleware'=>'auth'], function(){
//    Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function() {
//    });
//});

Route::view('admin/example', 'admin.example');
Route::view('admin/index', 'admin.index');

//Social Icons Add Links
Route::get('/admin/icon', ['as'=>'admin.social','uses'=>'SocialIconController@index']);
Route::post('/admin/icon/update', ['as'=>'admin.social.update', 'uses'=>'SocialIconController@addLinks']);

//ServiceCategory Categories Add, Edit, Delete
Route::get('/admin/service', ['as'=>'admin.category', 'uses'=>'ServiceCategoryController@index']);
Route::post('/admin/service/add', ['as'=>'admin.service.add', 'uses'=>'ServiceCategoryController@serviceAdd']);
Route::post('/admin/service/edit', ['as'=>'admin.service.edit', 'uses'=>'ServiceCategoryController@serviceEdit']);
Route::get('/admin/service/delete/{id}', ['as'=>'admin.service.delete', 'uses'=>'ServiceCategoryController@serviceDelete']);


//Background images Edit
Route::get('/admin/images', ['as'=>'admin.images', 'uses'=>'BackgroundImagesController@index']);
Route::post('/admin/image/update', ['as'=>'admin.image.edit', 'uses'=>'BackgroundImagesController@imageEdit']);


//About Us Add/Edit
Route::get('/admin/aboutus', ['as'=>'admin.aboutus', 'uses'=>'AboutUsController@index']);
Route::post('/admin/aboutus/edit', ['as'=>'admin.aboutus.edit', 'uses'=>'AboutUsController@aboutUsEdit']);