<?php

use Illuminate\Support\Facades\Route;
use Modules\Tour\Controllers\TourController;

Route::prefix('tour')->name('tour.')->group(function () {
    Route::get('/',[TourController::class,'index'])->name('index');
    Route::get('/tour-1',[TourController::class,'show'])->name('show');
});
