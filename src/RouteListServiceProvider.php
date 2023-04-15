<?php

namespace RajTechnologies\RouteList;

use Illuminate\Support\ServiceProvider;

class RouteListServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'RouteList');
        // $this->publishes([
        //     __DIR__.'/../config/routelist.php' => config_path('routelist.php'),
        // ], 'routelist');

    }
}
