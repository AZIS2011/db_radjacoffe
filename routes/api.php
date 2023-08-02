<?php

use App\Http\Controllers\ProductApi1Controller;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/products', [ProductApiController::class,'index']);
Route::get('/products/create', [ProductApiController::class,'create']);
Route::post('/products', [ProductApiController::class,'store']);
Route::get('/products/{id}',[ProductApiController::class,'show']);
Route::put('/products/{id}',[ProductApiController::class,'update']);
Route::delete('/products/{id}',[ProductApiController::class,'destroy']);

Route::get('/products1', [ProductApi1Controller::class,'index']);
Route::get('/products1/create', [ProductApi1Controller::class,'create']);
Route::post('/products1', [ProductApi1Controller::class,'store']);
Route::get('/products1/{id}',[ProductApi1Controller::class,'show']);
Route::put('/products1/{id}',[ProductApi1Controller::class,'update']);
Route::delete('/products1/{id}',[ProductApi1Controller::class,'destroy']);

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
