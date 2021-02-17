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
    //Settings
    Route::get('/settings', 'Admin\SettingController@index')->name('settings');
    Route::post('/setting/update/{id}', 'Admin\SettingController@update')->name('setting.update');
    //Users
    Route::get('/users', 'Admin\UsersController@index')->name('users');
    Route::get('/user/create', 'Admin\UsersController@create')->name('user.create');
    Route::post('/user/store', 'Admin\UsersController@store')->name('user.store');
    Route::get('/user/edit/{id}', 'Admin\UsersController@edit')->name('user.edit');
    Route::post('/user/update/{id}', 'Admin\UsersController@update')->name('user.update');
    Route::get('/user/delete/{id}', 'Admin\UsersController@destroy')->name('user.destroy');
   
    // Profile
    Route::get('/user/profile', 'Admin\ProfilesController@index')->name('user.profile');
    Route::post('/user/profile/update', 'Admin\ProfilesController@update')->name('user.profile.update');
});
