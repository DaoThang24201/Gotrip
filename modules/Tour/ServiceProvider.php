<?php


namespace Modules\Tour;


use Illuminate\Support\Facades\View;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {


    function boot()
    {
        View::addNamespace('Tour',__DIR__.'/Views');

        $this->loadMigrationsFrom(__DIR__.'/./database/migrations');
    }


    function register()
    {
        $this->app->register(RouteProvider::class);
    }
}
