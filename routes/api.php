<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user-list')->group(function () {
    Route::get('/', [UserListController::class, 'index']);
    Route::get('/{userList}', [UserListController::class, 'show']);
    Route::post('/', [UserListController::class, 'store']);
    Route::put('/{userList}', [UserListController::class, 'update']);
    Route::delete('/{userList}', [UserListController::class, 'destroy']);
});