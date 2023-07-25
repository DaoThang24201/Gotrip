<?php

use Illuminate\Support\Facades\Route;
use Modules\Hotel\Controllers\HotelController;

Route::prefix('hotel')->name('hotel.')->group(function () {
    Route::get('/',[HotelController::class,'index'])->name('index');
    Route::get('/{slug}',[HotelController::class,'show'])->name('show');
});
