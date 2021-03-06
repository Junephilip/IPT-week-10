<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MerchandiceController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\HomeController;
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

Route::get('units',[UnitController::class,'index']);
Route::get('categories',[CategoryController::class,'index']);
Route::get('merchandices',[MerchandiceController::class,'index']);
Route::get('/',[HomeController::class,'index']);
