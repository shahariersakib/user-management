<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\UserListTwoController;

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('user-list', UserListController::class);
    Route::resource('user-list-two', UserListTwoController::class);

});