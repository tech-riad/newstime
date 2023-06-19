<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


    Route::get('/',[WebsiteController::class,'index'])->name('index');
    Route::get('/post/show/{id}',[WebsiteController::class, 'show'])->name('show');


    Route::get('/post/show/{category_id}',[WebsiteController::class, 'categoryshow'])->name('categoryshow');
