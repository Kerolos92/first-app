<?php

use App\Http\Controllers\categoryController;
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


Route::get('/categories', [categoryController::class, 'index']);
Route::get('/categories/create', [categoryController::class, 'create']);
Route::get('/categories/{category}', [categoryController::class, 'show']);
Route::post('/categories', [categoryController::class, 'store']);
Route::get('/categories/{category}/edit', [categoryController::class, 'edit']);
Route::put('/categories/{category}', [categoryController::class, 'update']);
Route::delete('/categories/{category}', [categoryController::class, 'destroy']);








