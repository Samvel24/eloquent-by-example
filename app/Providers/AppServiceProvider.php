<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // listen() permite ver las consultas SQL sin formato que genera Eloquent. 
        // Ver: https://laravel.com/docs/5.5/database#listening-for-query-events
        /*\DB::listen(function ($event) {
            dump($event->sql);
            dump($event->bindings);
        });*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
