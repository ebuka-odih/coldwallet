<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');

    Route::get('users', "Admin\UserController@users")->name('users');
    Route::get('delete/user', "Admin\UserController@deleteUser")->name('deleteUser');

    Route::resource('coins', "Admin\AdminCoinController");


});
