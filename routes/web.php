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

Route::get('/', ['as'=>'site.main', 'uses'=>'MainPageController@index']);
Route::get('/offer/{id}', ['as'=>'admin.offer', 'uses'=>'OfferController@index'])->where('id', '[0-9]+');

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
Route::get('/admin/category', ['as'=>'admin.category', 'uses'=>'ServiceCategoryController@index']);

Route::get('/admin/category/add', ['as'=>'admin.category.add', 'uses'=>'ServiceCategoryController@serviceAddPage']);
Route::post('/admin/category/add', ['as'=>'admin.category.add', 'uses'=>'ServiceCategoryController@serviceAdd']);

Route::get('/admin/category/edit/{id}', ['as'=>'admin.category.edit', 'uses'=>'ServiceCategoryController@serviceEditPage'])->where('id', '[0-9]+');
Route::post('/admin/category/edit/{id}', ['as'=>'admin.category.edit', 'uses'=>'ServiceCategoryController@serviceEdit'])->where('id', '[0-9]+');

Route::get('/admin/category/delete/{id}', ['as'=>'admin.category.delete', 'uses'=>'ServiceCategoryController@serviceDelete'])->where('id', '[0-9]+');


//Background images Edit
Route::get('/admin/images', ['as'=>'admin.images', 'uses'=>'BackgroundImagesController@index']);
Route::post('/admin/image/update', ['as'=>'admin.image.edit', 'uses'=>'BackgroundImagesController@imageEdit']);


//About Us Add/Edit
Route::get('/admin/aboutus', ['as'=>'admin.aboutus', 'uses'=>'AboutUsController@index']);
Route::post('/admin/aboutus/edit', ['as'=>'admin.aboutus.edit', 'uses'=>'AboutUsController@aboutUsEdit']);


//About Staff Add/Edit
Route::get('/admin/aboutstaff', ['as'=>'admin.aboutstaff', 'uses'=>'AboutStaffController@index']);
Route::post('/admin/aboutstaff/edit', ['as'=>'admin.aboutstaff.edit', 'uses'=>'AboutStaffController@aboutStaffEdit']);


//Service Add/Edit/Delete
Route::get('/admin/service', ['as'=>'admin.service', 'uses'=>'ServiceController@index']);

Route::get('/admin/service/add', ['as'=>'admin.service.add', 'uses'=>'ServiceController@ServiceAddPage']);
Route::post('/admin/service/add', ['as'=>'admin.service.add', 'uses'=>'ServiceController@ServiceAdd']);

Route::get('/admin/service/edit/{id}', ['as'=>'admin.service.edit', 'uses'=>'ServiceController@ServiceEditPage'])->where('id', '[0-9]+');
Route::post('/admin/service/edit/{id}', ['as'=>'admin.service.edit', 'uses'=>'ServiceController@ServiceEdit'])->where('id', '[0-9]+');

Route::get('/admin/service/delete/{id}', ['as'=>'admin.service.delete', 'uses'=>'ServiceController@serviceDelete'])->where('id', '[0-9]+');


//Staff Add/Edit/Delete
Route::get('/admin/staff', ['as'=>'admin.staff', 'uses'=>'StaffController@index']);

Route::get('/admin/staff/add', ['as'=>'admin.staff.add', 'uses'=>'StaffController@staffAddPage']);
Route::post('/admin/staff/add', ['as'=>'admin.staff.add', 'uses'=>'StaffController@staffAdd']);

Route::get('/admin/staff/edit/{id}', ['as'=>'admin.staff.edit', 'uses'=>'StaffController@staffEditPage'])->where('id', '[0-9]+');
Route::post('/admin/staff/edit/{id}', ['as'=>'admin.staff.edit', 'uses'=>'StaffController@staffEdit'])->where('id', '[0-9]+');

Route::get('/admin/staff/delete/{id}', ['as'=>'admin.staff.delete', 'uses'=>'StaffController@staffDelete'])->where('id', '[0-9]+');


//Brand Add/Edit/Delete
Route::get('/admin/brand', ['as'=>'admin.brand', 'uses'=>'BrandController@index']);

Route::get('/admin/brand/add', ['as'=>'admin.brand.add', 'uses'=>'BrandController@brandAddPage']);
Route::post('/admin/brand/add', ['as'=>'admin.brand.add', 'uses'=>'BrandController@brandAdd']);

Route::get('/admin/brand/edit/{id}', ['as'=>'admin.brand.edit', 'uses'=>'BrandController@brandEditPage'])->where('id', '[0-9]+');
Route::post('/admin/brand/edit/{id}', ['as'=>'admin.brand.edit', 'uses'=>'BrandController@brandEdit'])->where('id', '[0-9]+');

Route::get('/admin/brand/delete/{id}', ['as'=>'admin.brand.delete', 'uses'=>'BrandController@brandDelete'])->where('id', '[0-9]+');


//Special Offer Add/Edit/Delete
Route::get('/admin/offer', ['as'=>'admin.offer', 'uses'=>'SpecialOfferController@index']);

Route::get('/admin/offer/add', ['as'=>'admin.offer.add', 'uses'=>'SpecialOfferController@offerAddPage']);
Route::post('/admin/offer/add', ['as'=>'admin.offer.add', 'uses'=>'SpecialOfferController@offerAdd']);

Route::get('/admin/offer/edit/{id}', ['as'=>'admin.offer.edit', 'uses'=>'SpecialOfferController@offerEditPage'])->where('id', '[0-9]+');
Route::post('/admin/offer/edit/{id}', ['as'=>'admin.offer.edit', 'uses'=>'SpecialOfferController@offerEdit'])->where('id', '[0-9]+');

Route::get('/admin/offer/delete/{id}', ['as'=>'admin.offer.delete', 'uses'=>'SpecialOfferController@offerDelete'])->where('id', '[0-9]+');


//Image Gallery Add/Delete
Route::get('/admin/gallery', ['as'=>'admin.gallery', 'uses'=>'GalleryController@index']);

Route::get('/admin/gallery/add', ['as'=>'admin.gallery.add', 'uses'=>'GalleryController@galleryAddPage']);
Route::post('/admin/gallery/add', ['as'=>'admin.gallery.add', 'uses'=>'GalleryController@galleryAdd']);

Route::get('/admin/gallery/delete/{id}', ['as'=>'admin.gallery.delete', 'uses'=>'GalleryController@galleryDelete'])->where('id', '[0-9]+');


//Contact Add/Delete/Edit
Route::get('/admin/contact', ['as'=>'admin.contact', 'uses'=>'ContactController@index']);
Route::post('/admin/contact/update', ['as'=>'admin.contact.update', 'uses'=>'ContactController@contactUpdate']);