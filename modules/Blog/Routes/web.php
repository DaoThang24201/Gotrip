<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Controllers\BlogController;


Route::prefix('blog')->name('blog.')->group(function() {
    Route::get('/',[BlogController::class,'index']);
    Route::get('/{slug}',[BlogController::class,'show'])->name('show');
});


