<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('categorys/index', [CategoryController::class, 'index']);
Route::get('categorys/create', [CategoryController::class, 'create']);
Route::post('categorys/store', [CategoryController::class, 'store']);
Route::get('categorys/delete/{id}', [CategoryController::class, 'delete']);