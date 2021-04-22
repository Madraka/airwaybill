<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    // Shipments
    Route::get('/shipments', 'Admin\ShipmentsController@index')->name('shipments');
    Route::get('/shipment/create', 'Admin\ShipmentsController@create')->name('shipment.create');
    Route::post('/shipment/store', 'Admin\ShipmentsController@store')->name('shipment.store');
    Route::get('/shipment/edit/{id}', 'Admin\ShipmentsController@edit')->name('shipment.edit');
    Route::post('/shipment/update/{id}', 'Admin\ShipmentsController@update')->name('shipment.update');
    Route::get('/shipment/delete/{id}', 'Admin\ShipmentsController@destroy')->name('shipment.destroy');
    Route::get('/shipment/customer/change/ajax/{id}', 'Admin\ShipmentsController@customAjaxChange')->name('shipment.customer.ajax.change');
    // Manifests
    Route::get('/manifests', 'Admin\ManifestsController@index')->name('manifests');
    Route::get('/manifest/create', 'Admin\ManifestsController@create')->name('manifest.create');
    Route::post('/manifest/store', 'Admin\ManifestsController@store')->name('manifest.store');
    Route::get('/manifest/edit/{id}', 'Admin\ManifestsController@edit')->name('manifest.edit');
    Route::post('/manifest/update/{id}', 'Admin\ManifestsController@update')->name('manifest.update');
    Route::get('/manifest/delete/{id}', 'Admin\ManifestsController@destroy')->name('.manifest.destroy');
    // Services
    Route::get('/services', 'Admin\ServicesController@index')->name('services');
    Route::get('/service/create', 'Admin\ServicesController@create')->name('service.create');
    Route::post('/service/store', 'Admin\ServicesController@store')->name('service.store');
    Route::get('/service/edit/{id}', 'Admin\ServicesController@edit')->name('service.edit');
    Route::post('/service/update/{id}', 'Admin\ServicesController@update')->name('service.update');
    Route::get('/service/delete/{id}', 'Admin\ServicesController@destroy')->name('service.destroy');
    // Countries
    Route::get('/countries', 'Admin\CountriesController@index')->name('countries');
    Route::get('/country/create', 'Admin\CountriesController@create')->name('country.create');
    Route::post('/country/store', 'Admin\CountriesController@store')->name('country.store');
    Route::get('/country/edit/{id}', 'Admin\CountriesController@edit')->name('country.edit');
    Route::post('/country/update/{id}', 'Admin\CountriesController@update')->name('country.update');
    Route::get('/country/delete/{id}', 'Admin\CountriesController@destroy')->name('country.destroy');
    //Settings
    Route::get('/settings', 'Admin\SettingController@index')->name('settings')->middleware('admin');
    Route::post('/setting/update/{id}', 'Admin\SettingController@update')->name('setting.update')->middleware('admin');
    //Users
    Route::get('/users', 'Admin\UsersController@index')->name('users')->middleware('admin');
    Route::get('/user/create', 'Admin\UsersController@create')->name('user.create')->middleware('admin');
    Route::post('/user/store', 'Admin\UsersController@store')->name('user.store')->middleware('admin');
    Route::get('/user/edit/{id}', 'Admin\UsersController@edit')->name('user.edit')->middleware('admin');
    Route::post('/user/update/{id}', 'Admin\UsersController@update')->name('user.update')->middleware('admin');
    Route::get('/user/delete/{id}', 'Admin\UsersController@destroy')->name('user.destroy')->middleware('admin');

    // Profile
    Route::get('/user/profile', 'Admin\ProfilesController@index')->name('user.profile');
    Route::post('/user/profile/update', 'Admin\ProfilesController@update')->name('user.profile.update');

    //AWB Generate
    Route::get('/awb', 'Admin\AwbController@index');
    Route::get('/generate-random-awb/{id}', 'Admin\AwbController@generateRandomAwb')->name('awb_random_generate');
    Route::post('/generate-awb', 'Admin\AwbController@generateAwb')->name('awb_generate');
    Route::get('/awb/{id}', 'Admin\AwbController@getAwb');

    //
    Route::get('/customers', 'Admin\UsersController@showCustomer')->name('customers');
    Route::get('/customer/create', 'Admin\UsersController@createCustomer')->name('customer.create')->middleware('admin');
    Route::post('/customer/store', 'Admin\UsersController@store')->name('customer.store')->middleware('admin');

    Route::get('/cus_ref/{id}', 'Admin\UsersController@getRefNo');

    // Website CMS
    // Slider
    Route::get('/sliders', 'Admin\SlidersController@index')->name('admin.sliders');
    Route::get('/slider/create', 'Admin\SlidersController@create')->name('admin.slider.create');
    Route::post('/slider/store', 'Admin\SlidersController@store')->name('admin.slider.store');
    Route::get('/slider/edit/{id}', 'Admin\SlidersController@edit')->name('admin.slider.edit');
    Route::post('/slider/update/{id}', 'Admin\SlidersController@update')->name('admin.slider.update');
    Route::get('/slider/delete/{id}', 'Admin\SlidersController@destroy')->name('admin.slider.destroy');
    // Welcome Section
    Route::get('/welcomesection', 'Admin\WelcomeSectionController@index')->name('admin.welcomesection');
    Route::get('/welcomesection/create', 'Admin\WelcomeSectionController@create')->name('admin.welcomesection.create');
    Route::post('/welcomesection/store', 'Admin\WelcomeSectionController@store')->name('admin.welcomesection.store');
    Route::get('/welcomesection/edit/{id}', 'Admin\WelcomeSectionController@edit')->name('admin.welcomesection.edit');
    Route::post('/welcomesection/update/{id}', 'Admin\WelcomeSectionController@update')->name('admin.welcomesection.update');
    Route::get('/welcomesection/delete/{id}', 'Admin\WelcomeSectionController@destroy')->name('admin.welcomesection.destroy');
    // CMS Services
    Route::get('/cms-services', 'Admin\CMSServicesController@index')->name('admin.cmsservices');
    Route::get('/cms-service/create', 'Admin\CMSServicesController@create')->name('admin.cmsservice.create');
    Route::post('/cms-service/store', 'Admin\CMSServicesController@store')->name('admin.cmsservice.store');
    Route::get('/cms-service/edit/{id}', 'Admin\CMSServicesController@edit')->name('admin.cmsservice.edit');
    Route::post('/cms-service/update/{id}', 'Admin\CMSServicesController@update')->name('admin.cmsservice.update');
    Route::get('/cms-service/delete/{id}', 'Admin\CMSServicesController@destroy')->name('admin.cmsservice.destroy');
    // Pages
    Route::get('/pages', 'Admin\PagesController@index')->name('admin.pages');
    Route::get('/page/create', 'Admin\PagesController@create')->name('admin.page.create');
    Route::post('/page/store', 'Admin\PagesController@store')->name('admin.page.store');
    Route::get('/page/edit/{id}', 'Admin\PagesController@edit')->name('admin.page.edit');
    Route::post('/page/update/{id}', 'Admin\PagesController@update')->name('admin.page.update');
    Route::get('/page/delete/{id}', 'Admin\PagesController@destroy')->name('admin.page.destroy');
});

// Frontend

Route::get('/', 'HomeController@index')->name('index');
Route::get('/service', 'HomeController@services')->name('front.services');
Route::get('/page/{slug}', 'HomeController@page')->name('page');
Route::get('/emails', 'EmailsController@index')->name('emails');
Route::post('/sendemail', 'EmailsController@send')->name('sendemail');
