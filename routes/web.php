<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;

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
    return view('client.welcome');
})->name('home');
//user login
Route::resource('users',UserController::class);
Route::post('/Users/login',[UserController::class,'login'])->name('users.login');
Route::post('/Users/logout',[UserController::class,'logout'])->name('users.logout');
//End User Login
//Category and subcategory
Route::post('/subcategories/create/{category}',[SubcategoryController::class,'store'])->name('subcategories.store');
Route::patch('/subcategories/{category}/update',[SubcategoryController::class,'update'])->name('subcategories.update');
Route::delete('/subcategories/{subcategory}/delete/{category}',[SubcategoryController::class,'destroy'])->name('subcategories.destroy');
Route::resource('categories',CategoryController::class);
//end Category
