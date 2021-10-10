<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\UseremailController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\VideocatController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SubfooterController;
use App\Http\Controllers\OnlineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtsoController;
use App\Http\Controllers\SubetsoController;
use App\Http\Controllers\BooksvController;
use App\Http\Controllers\AmarsaderatController;
use App\Http\Controllers\KalaController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/dashboard',[UserController::class,'show'])->name('users.dashboard');
//user login
Route::get('/users/create?id=',[UserController::class,'create'])->name('users.register');
Route::resource('users',UserController::class);
Route::post('/Users/login',[UserController::class,'login'])->name('users.login');
Route::post('/Users/logout',[UserController::class,'logout'])->name('users.logout');
//End User Login
//Category and subcategory
Route::post('/subcategories/create/{category}',[SubcategoryController::class,'store'])->name('subcategories.store');
Route::patch('/subcategories/{category}/update',[SubcategoryController::class,'update'])->name('subcategories.update');
Route::get('/subcategories/index',[SubcategoryController::class,'index'])->name('subcategories.index');
Route::delete('/subcategories/{subcategory}/delete',[SubcategoryController::class,'destroy'])->name('subcategories.destroy');
Route::get('/subcategories/{subcategory}/show',[SubcategoryController::class,'show'])->name('subcategories.show');
Route::resource('categories',CategoryController::class);
//end Category
// content
Route::resource('contents',ContentController::class);
Route::post('/contents/leaders/{leader}',[ContentController::class,'store'])->name('content.leader');
Route::get('/content/leaders/{leader}',[ContentController::class,'create'])->name('content.create');
// end contents
// Leader
Route::resource('leaders',LeaderController::class);
//End Leader
//Role for User
Route::resource('roles',RoleController::class);
//End Role
//Post
Route::get('/subcategories/{subcategory}/post',[PostController::class,'create'])->name('subcategories.post.create');
Route::post('/subcategories/{subcategory}/store',[PostController::class,'store'])->name('posts.subcategory');
Route::get('/subcategories/{subcategory}/list/post',[PostController::class,'index'])->name('Posts.index');
Route::resource('posts',PostController::class);
//End Post
//Question Answer
Route::resource('questions',QuestionController::class);
//End Question Answer
// Tags
Route::resource('tags',TagController::class);
//End Tags
//Analysis
Route::resource('analyses',AnalysisController::class);
//End Analysis
//Start Useremails
Route::resource('massages',MassageController::class);
//End Useremails
// Video
Route::resource('videocats.videos',VideoController::class);
//End Video
// Videocat
Route::resource('videocats',VideocatController::class);
//End Videocat
//Footer
Route::resource('footers',FooterController::class);
//End Footer
//start Subfooter
Route::resource('subfooters',SubfooterController::class);
//subfooter
//Start Online Price
Route::get('/Online/price',[OnlineController::class,'index'])->name('Online.Price');
//End Online Price
// Game Menu
Route::get('/for-fun',[HomeController::class,'Game'])->name('game');
//End Gamge Menu
//Etsos
Route::resource('etsos',EtsoController::class);
//End Etsos
//subEtsos
Route::get('/list/all/etso',[SubetsoController::class,'index'])->name('list.esto');
Route::resource('etsos.subetsos',SubetsoController::class);
//Endsubetsos
//Start booksvs
Route::resource('booksvs',BooksvController::class);
//End booksvs
//gavanin
Route::get('/Books/Gavanin_1399',[HomeController::class,'data'])->name('gaaninbooks');
Route::post('/Books/search',[HomeController::class,'search'])->name('search.gavanin');
Route::post('/Books/search/{search}',[HomeController::class,'searchdata'])->name('search.datagavanin');
Route::resource('amarsaderat',AmarsaderatController::class);
//End Gavanin
//Start Jason
Route::get('/data/etehadie',[HomeController::class,'etehadie'])->name('etehadie');
Route::get('/data/paygahetelaresani',[HomeController::class,'paygahetelaresani'])->name('paygahetelaresani');
Route::get('/data/otaghayebazargani',[HomeController::class,'otaghayebazargani'])->name('otaghayebazargani');
Route::get('/data/bazarhayemontakhab',[HomeController::class,'bazarhayemontakhab'])->name('bazarhayemontakhab');
//End Jason
//Start World Data
Route::get('/data/world/',[HomeController::class,'Erth'])->name('Erth.data');
//Route::get('/kala/khadamat/',[HomeController::class,'kala'])->name('kala.khadamat');
//Route::post('/data/kala/khadamat/',[HomeController::class,'khadamat'])->name('data.khadamat');
Route::get('/data/world/{code}',[HomeController::class,'world'])->name('world.data');
//End Data
//Price Callector
Route::get('/price/callector',[HomeController::class,'PriceCallector'])->name('price.callector');
//End Price Callector
// start Kala
Route::resource('kalas',KalaController::class);
//End Kala

