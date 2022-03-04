<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Public Routes
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);


//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/product', [ProductController::class, 'store']);
    Route::put('/product/{id}',[ProductController::class, 'update']);
    Route::delete('/product/{id}',[ProductController::class, 'destroy']);
    Route::post('/logout', [UserController::class, 'logout']);
});


