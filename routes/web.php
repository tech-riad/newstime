<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
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




Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/message', [MessageController::class, 'store'])->name('message');

Route::group(['as'=>'category.','prefix'=>'category'],function(){

    Route::get('/',[CategoryController::class,'index'])->name('index');
    Route::get('/create',[CategoryController::class,'create'])->name('create');
    Route::post('/store',[CategoryController::class,'store'])->name('store');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[CategoryController::class,'update'])->name('update');
    Route::any('/destroy/{id}',[CategoryController::class,'destroy'])->name('destroy');

});

// Subcategory
Route::group(['as'=>'subcategory.','prefix'=>'subcategory'],function(){

    Route::get('/',[SubcategoryController::class,'index'])->name('index');
    Route::get('/create',[SubcategoryController::class,'create'])->name('create');
    Route::post('/store',[SubcategoryController::class,'store'])->name('store');
    Route::get('/edit/{id}',[SubcategoryController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[SubcategoryController::class,'update'])->name('update');
    Route::any('/destroy/{id}',[SubcategoryController::class,'destroy'])->name('destroy');

});
// Tag

Route::group(['as'=>'tag.','prefix'=>'tag'],function(){

    Route::get('/',[TagsController::class,'index'])->name('index');
    Route::get('/create',[TagsController::class,'create'])->name('create');
    Route::post('/store',[TagsController::class,'store'])->name('store');
    Route::get('/edit/{id}',[TagsController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[TagsController::class,'update'])->name('update');
    Route::any('/destroy/{id}',[TagsController::class,'destroy'])->name('destroy');

});

// News
Route::group(['as'=>'news.','prefix'=>'news'],function(){

    Route::get('/',[NewsController::class,'index'])->name('index');
    Route::get('/create',[NewsController::class,'create'])->name('create');
    Route::post('/store',[NewsController::class,'store'])->name('store');
    Route::get('/edit/{id}',[NewsController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[NewsController::class,'update'])->name('update');
    Route::any('/destroy/{id}',[NewsController::class,'destroy'])->name('destroy');

});

Route::group(['as'=>'menu.','prefix'=>'menu'],function(){

    Route::get('/', [MenuController::class, 'index'])->name('index');
    Route::get('/create', [MenuController::class, 'create'])->name('create');
    Route::post('/store', [MenuController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [MenuController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [MenuController::class, 'destroy'])->name('destroy');

});

// Menu Dynamic Route








// Base Routes
require (base_path('routes/website.php'));
require (base_path('routes/website.php'));
