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
    Route::get('/export-users', [UserListController::class, 'export'])->name('export.users');
    Route::post('/import-users', [UserListController::class, 'import'])->name('import.users');
    Route::resource('user-list-two', UserListTwoController::class);
    Route::get('/export-users-two', [UserListTwoController::class, 'export'])->name('user-list-two.export');
    Route::post('/import-users-two', [UserListTwoController::class, 'import'])->name('user-list-two.import');

});