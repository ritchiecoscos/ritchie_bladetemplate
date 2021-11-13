<?php
use App\Http\Controllers\Controller;
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

Route::get('units', [App\Http\Controllers\UnitController::class,'index']);
Route::get('categories', [App\Http\Controllers\CategoryController::class,'index']);
Route::get('merchandices', [App\Http\Controllers\MerchandiceController::class,'index']);
Route::get('/', [App\Http\Controllers\HomeController::class,'index']);