<?php

use App\Http\Controllers\MakananController;
use App\Http\Controllers\Product1Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/makanan', [MakananController::class, 'index']);
Route::get('/makanan/create', [MakananController::class, 'create']);
Route::post('/makanan', [MakananController::class, 'store']);
Route::get('/makanan/{id}/edit', [MakananController::class, 'edit']);
Route::put('/makanan/{id}', [MakananController::class, 'update']);
Route::delete('/makanan/{id}', [MakananController::class, 'destroy']);



Route::get('/products1', [Product1Controller::class, 'index']);
Route::get('/products1/create', [Product1Controller::class, 'create']);
Route::post('/products1', [Product1Controller::class, 'store']);
Route::get('/products1/{id}/edit', [Product1Controller::class, 'edit']);
Route::put('/products1/{id}', [Product1Controller::class, 'update']);
Route::delete('/products1/{id}', [Product1Controller::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
