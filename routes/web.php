<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::post('/Users/login',[UserController::class,'login'])->name('Users.login');
Route::post('/Users/logout',[UserController::class,'logout'])->name('Users.logout');
//End User Login
