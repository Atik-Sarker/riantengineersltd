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

Route::get('/', 'BaseController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//MENU ROUTE START
Route::get('/power-&-energy', 'BaseController@PowerEnergy')->name('powerEnergy');
Route::get('/civil-&-construction', 'BaseController@CivilConstruction')->name('civilConstruction');
Route::get('/mechanical', 'BaseController@Mechanical')->name('Mechanical');
Route::get('/automation', 'BaseController@Automation')->name('Automation');
Route::get('/real-state', 'BaseController@RealState')->name('realEstate');
Route::get('/health-safty', 'BaseController@HealthSafty')->name('HealthSafty');
Route::get('/total-Quality-Management', 'BaseController@QualityManagement')->name('QualityManagement');
Route::get('/environment', 'BaseController@Environment')->name('Environment');
Route::get('/project-gallery', 'BaseController@Gallery')->name('Gallery');
Route::get('/contact-us', 'BaseController@Contact')->name('Contact');
Route::get('/overview', 'BaseController@overview')->name('overview');
Route::get('/vision-&-Mission', 'BaseController@VisionMission')->name('VisionMission');
Route::get('/management', 'BaseController@Management')->name('Management');
Route::get('/key-person', 'BaseController@keyPerson')->name('keyPerson');
Route::post('/contact-info', 'ContactInfoController@index')->name('contactInfo');
// MENU ROUTE END

// slider Route start
Route::get('/slider/create', 'sliderController@create')->name('slider.create');
Route::post('/slider/create', 'sliderController@store')->name('slider.store');
Route::get('/slider/manage', 'sliderController@index')->name('slider.manage');
Route::get('/slider/edit/{id}', 'sliderController@edit')->name('slider.edit');
Route::post('/slider/update/{id}', 'sliderController@update')->name('slider.update');
Route::get('/slider/delete/{id}', 'sliderController@destroy')->name('slider.destroy');
Route::post('/slider/status/{id}', 'sliderController@status')->name('slider.status');

// slider Route ends

// Logo Route start
Route::get('/logo/create', 'LogoController@create')->name('logo.create');
Route::post('/logo/create', 'LogoController@store')->name('logo.store');
Route::get('/logo/manage', 'LogoController@index')->name('logo.manage');
Route::get('/logo/edit/{id}', 'LogoController@edit')->name('logo.edit');
Route::post('/logo/update/{id}', 'LogoController@update')->name('logo.update');
Route::get('/logo/delete/{id}', 'LogoController@destroy')->name('logo.destroy');
Route::post('/logo/status/{id}', 'LogoController@status')->name('logo.status');

// Logo Route ends

// Gallery Route start
Route::get('/gallery/manage', 'GalleryController@index')->name('gallery.manage');
Route::get('/gallery/create', 'GalleryController@create')->name('gallery.create');
Route::post('/gallery/create', 'GalleryController@store')->name('gallery.store');
Route::get('/gallery/edit/{id}', 'GalleryController@edit')->name('gallery.edit');
Route::post('/gallery/update/{id}', 'GalleryController@update')->name('gallery.update');
Route::get('/gallery/delete/{id}', 'GalleryController@destroy')->name('gallery.destroy');
Route::post('/gallery/status/{id}', 'GalleryController@status')->name('gallery.status');
// Gallery Route ends

// Service Route start
Route::get('/service/manage', 'serviceController@index')->name('service.manage');
Route::get('/service/create', 'serviceController@create')->name('service.create');
Route::post('/service/create', 'serviceController@store')->name('service.store');
Route::get('/service/edit/{id}', 'serviceController@edit')->name('service.edit');
Route::post('/service/update/{id}', 'serviceController@update')->name('service.update');
Route::get('/service/delete/{id}', 'serviceController@destroy')->name('service.destroy');
Route::post('/service/status/{id}', 'serviceController@status')->name('service.status');
// Service Route ends





