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

//Site Main Page
Route::get('/', ['as'=>'site.main', 'uses'=>'MainPageController@index']);
Route::view('admin/example', 'admin.example');

//Offers Page
Route::get('/offer/{id}', ['as'=>'site.offer', 'uses'=>'OfferController@index'])->where('id', '[0-9]+');

//Service Page
Route::get('/service/{id}', ['as'=>'site.service', 'uses'=>'ServicePageController@index'])->where('id', '[0-9]+');

//Staff Page
Route::get('/allstaff/', ['as'=>'site.all.staff', 'uses'=>'StaffPageController@allStaff']);
Route::get('/singlestaff/{id}' , ['as'=>'site.single.staff', 'uses'=>'StaffPageController@singleStaff'])->where('id', '[0-9]+');

//Brand Page
Route::get('/brand', ['as'=>'site.brand', 'uses'=>'BrandPageController@index']);
Route::get('/brand/{id}', ['as'=>'site.single.brand', 'uses'=>'BrandPageController@singleBrand'])->where('id', '[0-9]+');

//Special Offer Page
Route::get('/special', ['as'=>'site.special.offer', 'uses'=>'SpecialOfferPageController@index']);
Route::get('/singlespecial/{id}', ['as'=>'site.single.offer', 'uses'=>'SpecialOfferPageController@singleSpecialOffer'])->where('id', '[0-9]+');

//get loaded gallery images
Route::get('/gallery/{offset}', ['as'=>'site.gallery.image', 'uses'=>'MainPageController@galleryImage'])->where('offset', '[0-9]+');
//Login Page
Route::get('/login', ['as'=>'login', 'uses'=>'UserController@index']);
Route::post('/login', ['as'=>'login', 'uses'=>'UserController@login']);

//Logout
Route::get('/logout', ['as'=>'logout', 'uses'=>'UserController@logout']);

//Admin Login Page
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    //Admin Main Page
    Route::get('/main', ['as'=>'admin.main', 'uses'=>'AdminController@index']);


    //Social Icons Add Links
    Route::get('/icon', ['as'=>'admin.social','uses'=>'SocialIconController@index']);
    Route::post('/icon/update', ['as'=>'admin.social.update', 'uses'=>'SocialIconController@addLinks']);


    //ServiceCategory Categories Add, Edit, Delete
    Route::get('/category', ['as'=>'admin.category', 'uses'=>'ServiceCategoryController@index']);

    Route::get('/category/add', ['as'=>'admin.category.add', 'uses'=>'ServiceCategoryController@serviceAddPage']);
    Route::post('/category/add', ['as'=>'admin.category.add', 'uses'=>'ServiceCategoryController@serviceAdd']);

    Route::get('/category/edit/{id}', ['as'=>'admin.category.edit', 'uses'=>'ServiceCategoryController@serviceEditPage'])->where('id', '[0-9]+');
    Route::post('/category/edit/{id}', ['as'=>'admin.category.edit', 'uses'=>'ServiceCategoryController@serviceEdit'])->where('id', '[0-9]+');

    Route::get('/category/delete/{id}', ['as'=>'admin.category.delete', 'uses'=>'ServiceCategoryController@serviceDelete'])->where('id', '[0-9]+');


    //Background images Edit
    Route::get('/images', ['as'=>'admin.images', 'uses'=>'BackgroundImagesController@index']);
    Route::post('/image/update', ['as'=>'admin.image.edit', 'uses'=>'BackgroundImagesController@imageEdit']);


    //About Us Add/Edit
    Route::get('/aboutus', ['as'=>'admin.aboutus', 'uses'=>'AboutUsController@index']);
    Route::post('/aboutus/edit', ['as'=>'admin.aboutus.edit', 'uses'=>'AboutUsController@aboutUsEdit']);


    //About Staff Add/Edit
    Route::get('/aboutstaff', ['as'=>'admin.aboutstaff', 'uses'=>'AboutStaffController@index']);
    Route::post('/aboutstaff/edit', ['as'=>'admin.aboutstaff.edit', 'uses'=>'AboutStaffController@aboutStaffEdit']);


    //Service Add/Edit/Delete
    Route::get('/service', ['as'=>'admin.service', 'uses'=>'ServiceController@index']);

    Route::get('/service/add', ['as'=>'admin.service.add', 'uses'=>'ServiceController@ServiceAddPage']);
    Route::post('/service/add', ['as'=>'admin.service.add', 'uses'=>'ServiceController@ServiceAdd']);

    Route::get('/service/edit/{id}', ['as'=>'admin.service.edit', 'uses'=>'ServiceController@ServiceEditPage'])->where('id', '[0-9]+');
    Route::post('/service/edit/{id}', ['as'=>'admin.service.edit', 'uses'=>'ServiceController@ServiceEdit'])->where('id', '[0-9]+');

    Route::get('/service/delete/{id}', ['as'=>'admin.service.delete', 'uses'=>'ServiceController@serviceDelete'])->where('id', '[0-9]+');


    //Staff Add/Edit/Delete
    Route::get('/staff', ['as'=>'admin.staff', 'uses'=>'StaffController@index']);

    Route::get('/staff/add', ['as'=>'admin.staff.add', 'uses'=>'StaffController@staffAddPage']);
    Route::post('/staff/add', ['as'=>'admin.staff.add', 'uses'=>'StaffController@staffAdd']);

    Route::get('/staff/edit/{id}', ['as'=>'admin.staff.edit', 'uses'=>'StaffController@staffEditPage'])->where('id', '[0-9]+');
    Route::post('/staff/edit/{id}', ['as'=>'admin.staff.edit', 'uses'=>'StaffController@staffEdit'])->where('id', '[0-9]+');

    Route::get('/staff/delete/{id}', ['as'=>'admin.staff.delete', 'uses'=>'StaffController@staffDelete'])->where('id', '[0-9]+');


    //Brand Add/Edit/Delete
    Route::get('/brand', ['as'=>'admin.brand', 'uses'=>'BrandController@index']);

    Route::get('/brand/add', ['as'=>'admin.brand.add', 'uses'=>'BrandController@brandAddPage']);
    Route::post('/brand/add', ['as'=>'admin.brand.add', 'uses'=>'BrandController@brandAdd']);

    Route::get('/brand/edit/{id}', ['as'=>'admin.brand.edit', 'uses'=>'BrandController@brandEditPage'])->where('id', '[0-9]+');
    Route::post('/brand/edit/{id}', ['as'=>'admin.brand.edit', 'uses'=>'BrandController@brandEdit'])->where('id', '[0-9]+');

    Route::get('/brand/delete/{id}', ['as'=>'admin.brand.delete', 'uses'=>'BrandController@brandDelete'])->where('id', '[0-9]+');


    //Special Offer Add/Edit/Delete
    Route::get('/offer', ['as'=>'admin.offer', 'uses'=>'SpecialOfferController@index']);

    Route::get('/offer/add', ['as'=>'admin.offer.add', 'uses'=>'SpecialOfferController@offerAddPage']);
    Route::post('/offer/add', ['as'=>'admin.offer.add', 'uses'=>'SpecialOfferController@offerAdd']);

    Route::get('/offer/edit/{id}', ['as'=>'admin.offer.edit', 'uses'=>'SpecialOfferController@offerEditPage'])->where('id', '[0-9]+');
    Route::post('/offer/edit/{id}', ['as'=>'admin.offer.edit', 'uses'=>'SpecialOfferController@offerEdit'])->where('id', '[0-9]+');

    Route::get('/offer/delete/{id}', ['as'=>'admin.offer.delete', 'uses'=>'SpecialOfferController@offerDelete'])->where('id', '[0-9]+');


    //Image Gallery Add/Delete
    Route::get('/gallery', ['as'=>'admin.gallery', 'uses'=>'GalleryController@index']);

    Route::get('/gallery/add', ['as'=>'admin.gallery.add', 'uses'=>'GalleryController@galleryAddPage']);
    Route::post('/gallery/add', ['as'=>'admin.gallery.add', 'uses'=>'GalleryController@galleryAdd']);

    Route::get('/gallery/delete/{id}', ['as'=>'admin.gallery.delete', 'uses'=>'GalleryController@galleryDelete'])->where('id', '[0-9]+');


    //Contact Add/Delete/Edit
    Route::get('/contact', ['as'=>'admin.contact', 'uses'=>'ContactController@index']);
    Route::post('/contact/update', ['as'=>'admin.contact.update', 'uses'=>'ContactController@contactUpdate']);

    //map Add/Delete/Edit
    Route::get('/map', ['as'=>'admin.map', 'uses'=>'MapController@index']);
    Route::post('/map/update', ['as'=>'admin.map.update', 'uses'=>'MapController@mapUpdate']);

});