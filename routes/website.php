<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


    Route::get('/',[WebsiteController::class,'index'])->name('index');
    Route::get('/post/show/{id}',[WebsiteController::class, 'show'])->name('show');
    Route::get('/news/{category}',[WebsiteController::class, 'showByCategory'])->name('news.category');



