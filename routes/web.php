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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/services', function () {
    return view('services');
});
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
    Route::get('/awb','Admin\AwbController@index');
    Route::post('/generate-awb','Admin\AwbController@generateAwb');
});
