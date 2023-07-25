<?php

namespace Modules\Hotel;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteProvider extends RouteServiceProvider {


    function boot()
    {
        $this->routes(function () {
            Route::middleware('web')->group(__DIR__.'/Routes/web.php');
        });
    }
}
