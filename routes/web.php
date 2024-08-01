<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
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


Route::get('/', [BookController::class, 'index']);
//Route::get('/locale/{leng}', [HomeController::class, 'index']);
////Route::get('locale/{leng}', [HomeController::class, 'index']);
//Route::get('/story', [HomeController::class, 'story']);
//Route::get('/products', [HomeController::class, 'products']);
//Route::get('/faq', [HomeController::class, 'faq']);
//Route::get('/contact', [HomeController::class, 'contact']);
//Route::get('/admin', [AdminController::class, 'aindex']);
//Route::get('/button', [AdminController::class, 'abutton']);
//Route::get('/alert', [AdminController::class, 'aalert']);
//Route::get('/login-out', [AdminController::class, 'log_out']);
//Route::get('/company', [CompaniesController::class, 'index']);



Route::resource('companies', CompaniesController::class)->middleware('auth');
Route::resource('warehouse', WarehouseController::class)->middleware('auth');
Route::resource('books', BookController::class)->middleware('auth');
Route::resource('comments', CommentController::class)->middleware('auth');
Route::resource('massage', MassageController::class)->middleware('auth');










//
//Route::get('/', function () {
//    return view('main');
//});


//Route::get('/all/{name?}',[UserController::class, 'all']);
//
//Route::get('/show',[UserController::class, 'show']);
//Route::get('/invoke', ShowController::class);

//Route::get('/hello/{son1?}/{son2?}/{qiymat?}', function ($son1,$son2,$qiymat=null) {
//    if ($qiymat == '+') {
//        return "javob ". $son1 + $son2;
//    }
//    elseif ($qiymat=='-') {
//        return "javob ". $son1 - $son2;
//    }
//    elseif ($qiymat=='/') {
//        return "javob ". $son1 / $son2;
//    }
//    elseif ($qiymat=='*') {
//        return "javob ". $son1 * $son2;
//    }
//    else{
//        return "javob". $son1+$son2;
//    }
//});
//
//
//Route::get('salom', function (Request $request) {
//   $a = $request->all();
//    return view('about',['massiv'=>$a]);
//});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');
//Route::get('/locale/{leng}', [HomeController::class, 'about']);
Route::get('/locale/{lang}', function ($lang){
    session()->put('lang',$lang);
    return redirect('/');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
