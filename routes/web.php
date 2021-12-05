<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UseremailController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\VideocatController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\OnlineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtsoController;
use App\Http\Controllers\SubetsoController;
use App\Http\Controllers\BooksvController;
use App\Http\Controllers\AmarsaderatController;
use App\Http\Controllers\KalaController;
use App\Http\Controllers\CatalogueController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\WriterMiddleware;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\NewsemailController;
use App\Http\Controllers\ClientController\ClientControoller;
use App\Http\Controllers\MinerController;
use App\Http\Controllers\BarcodeController;

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

Route::get('/test', function () {
    return view('Panel.Link.test');
});
//////////////////////////////////////////home
//Search book
Route::post('/', [ClientControoller::class, 'serachgavanin'])->name('serachgavanin');
//End book
//Artical
Route::get('/Artical/All', [ClientControoller::class, 'ArticalAll'])->name('ArticalAll');
//End Artical
//Tag Artical
Route::get('/Tag/Artical/{tag}', [ClientControoller::class, 'TagArtical'])->name('show.tags');
//End Artical
//News All
Route::get('/news/All', [ClientControoller::class, 'NewsAll'])->name('NewsAll');
//End All
//Show Leaders
Route::get('/show/leaders/{leader}', [ClientControoller::class, 'ShowLeader'])->name('show.leaders');
//End Leaders
//artical singel
Route::get('/artical/singel/{content}', [ClientControoller::class, 'ShowArtical'])->name('show.artical');
//End singel
//show Post
Route::get('/post/show/{post}', [ClientControoller::class, 'ShowPost'])->name('show.posts');
//End Post
//calector
Route::get('/calector/price', [ClientControoller::class, 'calector'])->name('calector');
//End Calector
//Video Gallery
Route::get('/video/gallery', [ClientControoller::class, 'VideoAll'])->name('VideoAll');
//End Gallery
//singel Video
Route::get('/video/singel/{videocat}', [ClientControoller::class, 'SingelVideo'])->name('show.video');
//End video
//world data
Route::get('/data/world/{code}', [ClientControoller::class, 'world'])->name('world.data');
//End world
//Data
Route::get('/data/etehadie/home', [ClientControoller::class, 'etehadie'])->name('data.etehadie');
Route::get('/data/paygahetelaresani/home', [ClientControoller::class, 'paygahetelaresani'])->name('data.paygahetelaresani');
Route::get('/data/otaghayebazargani/home', [ClientControoller::class, 'otaghayebazargani'])->name('data.otaghayebazargani');
Route::get('/data/bazarhayemontakhab/home', [ClientControoller::class, 'bazarhayemontakhab'])->name('data.bazarhayemontakhab');
//End Data
//data site
Route::get('/amarsaderat/home',[ClientControoller::class,'amarsaderat'])->name('amarsaderat');
Route::get('/esto/home',[ClientControoller::class,'esto'])->name('esto');
Route::get('/forms/home',[ClientControoller::class,'forms'])->name('forms');
Route::get('/listketabha/home',[ClientControoller::class,'listketabha'])->name('listketabha');
//End data site

//Search in home
Route::post('/search/home',[ClientControoller::class, 'Search'])->name('search.Home');
//End search
//Forgot password
Route::get('/Forgot/password',[ClientControoller::class,'show'])->name('forgot');
Route::post('/Forgot/password',[ClientControoller::class,'forgot'])->name('forgot.password');
//End Forgot Password







///////////////////////////////////////home


///////////////////////////////////////panel Admin
Route::get('/', [HomeController::class, 'index'])->name('home');
//user login
Route::get('/users/create?id=', [UserController::class, 'create'])->name('users.register');
Route::resource('users', UserController::class);
Route::get('/users', [UserController::class, 'index'])->name('login');
Route::post('/Users/login', [UserController::class, 'login'])->name('users.login');
Route::post('/Users/logout', [UserController::class, 'logout'])->name('users.logout');
//news Email
Route::post('/newsemail', [NewsemailController::class, 'store'])->name('newsemail');
//End Email
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'show'])->name('users.dashboard');
    //Admin
    Route::middleware(AdminMiddleware::class)->group(function () {

        //Miner
        Route::resource('miners', MinerController::class);
        //End miner
        //barcode
        Route::resource('barcodes', BarcodeController::class);
        //End Barcode
        //link instagram ,...
        Route::get('/links/list', [LinkController::class, 'index'])->name('links.index');
        Route::patch('/links/update', [LinkController::class, 'update'])->name('links.update');
        //End link
        //Start Useremails
        Route::resource('massages', MassageController::class);
//End Useremails
        //Question Answer
        Route::post('/question/posts/{post}',[QuestionController::class,'store'])->name('question.store');
        Route::resource('questions', QuestionController::class);
//End Question Answer
        //user login
        Route::patch('/users/{user}/updateThis', [UserController::class, 'UpdateThis'])->name('users.updateThis');
        Route::get('/users/list/all', [UserController::class, 'ListAll'])->name('users.ListAll');
        //End User Login
        //Category and subcategory
        Route::post('/subcategories/create/{category}', [SubcategoryController::class, 'store'])->name('subcategories.store');
        Route::patch('/subcategories/{category}/update', [SubcategoryController::class, 'update'])->name('subcategories.update');
//        Route::get('/subcategories/index', [SubcategoryController::class, 'index'])->name('subcategories.index');
        Route::delete('/subcategories/{subcategory}/delete', [SubcategoryController::class, 'destroy'])->name('subcategories.destroy');
        Route::get('/subcategories/{subcategory}/show', [SubcategoryController::class, 'show'])->name('subcategories.show');
        Route::resource('categories', CategoryController::class);
//end Category
    });
//End Admin
//Guest
    Route::middleware(GuestMiddleware::class)->group(function () {
//Start Online Price
        Route::get('/Online/price', [OnlineController::class, 'index'])->name('Online.Price');
//End Online Price
// Game Menu
        Route::get('/for-fun', [HomeController::class, 'Game'])->name('game');
//End Gamge Menu
        //gavanin
        Route::get('/Books/Gavanin_1399', [HomeController::class, 'data'])->name('gaaninbooks');
        Route::post('/Books/search', [HomeController::class, 'search'])->name('search.gavanin');
//        Route::post('/Books/search/{search}', [HomeController::class, 'searchdata'])->name('search.datagavanin');
        Route::resource('amarsaderat', AmarsaderatController::class);
//End Gavanin
        //Start Jason
        Route::get('/data/etehadie', [HomeController::class, 'etehadie'])->name('etehadie');
        Route::get('/data/paygahetelaresani', [HomeController::class, 'paygahetelaresani'])->name('paygahetelaresani');
        Route::get('/data/otaghayebazargani', [HomeController::class, 'otaghayebazargani'])->name('otaghayebazargani');
        Route::get('/data/bazarhayemontakhab', [HomeController::class, 'bazarhayemontakhab'])->name('bazarhayemontakhab');
//End Jason
        //Start World Data
        Route::get('/data/world/', [HomeController::class, 'Erth'])->name('Erth.data');
        Route::get('/kala/khadamat/', [HomeController::class, 'kala'])->name('kala.khadamat');
        Route::post('/data/kala/khadamat/', [HomeController::class, 'khadamat'])->name('data.khadamat');
//        Route::get('/data/world/{code}', [HomeController::class, 'world'])->name('world.data');
//End Data
        //Price Callector
        Route::get('/price/callector', [HomeController::class, 'PriceCallector'])->name('price.callector');
//End Price Callector
        //start Catalogue
        Route::resource('catalogues', CatalogueController::class);
        Route::get('/catalogues/{catalogue}/edite', [CatalogueController::class, 'edite'])->name('catalogues.edite');
//End Catalogue
    });
//End guest
//Writer
    Route::middleware(WriterMiddleware::class)->group(function () {
        //Miner
        Route::resource('miners', MinerController::class);
        //End miner
        //barcode
        Route::resource('barcodes', BarcodeController::class);
        //End Barcode
        //ciry
        Route::get('/danestaniha', [CityController::class, 'index'])->name('cities.index');
        Route::patch('/danestaniha/update', [CityController::class, 'update'])->name('cities.update');
        //Endcity
        //Form
        Route::resource('forms', FormController::class);
//End Form
        // Video
        Route::resource('videocats.videos', VideoController::class);
//End Video
// Videocat
        Route::resource('videocats', VideocatController::class);
//End Videocat
        //Footer
        Route::get('/footers/manager', [FooterController::class, 'create'])->name('footers.manager');
        Route::patch('/footer/update1', [FooterController::class, 'edit'])->name('footers.store1');
        Route::patch('/footer/update2', [FooterController::class, 'update'])->name('footers.store2');
//End Footer
// Tags
        Route::resource('tags', TagController::class);
//End Tags
// content
        Route::resource('contents', ContentController::class);
        Route::post('/contents/leaders/{leader}', [ContentController::class, 'store'])->name('content.leader');
        Route::get('/content/leaders/{leader}', [ContentController::class, 'create'])->name('content.create');
        // end contents
        // Leader
        Route::resource('leaders', LeaderController::class);
//End Leader
        //Post
//        Route::get('/subcategories/{subcategory}/post', [PostController::class, 'create'])->name('subcategories.post.create');
//        Route::post('/subcategories/{subcategory}/store', [PostController::class, 'store'])->name('posts.subcategory');
//        Route::get('/subcategories/{subcategory}/list/post', [PostController::class, 'index'])->name('Posts.index');
        Route::resource('posts', PostController::class);
        Route::delete('/delete/{id}',[PostController::class,'delete'])->name('delete');
//End Post
        //Etsos
        Route::resource('etsos', EtsoController::class);
//End Etsos
        //subEtsos
        Route::get('/list/all/etso', [SubetsoController::class, 'index'])->name('list.esto');
        Route::resource('etsos.subetsos', SubetsoController::class);
//Endsubetsos
        //Start booksvs
        Route::resource('booksvs', BooksvController::class);
//End booksvs
        // start Kala
        Route::resource('kalas', KalaController::class);
//End Kala
    });
//End Writer
});

















