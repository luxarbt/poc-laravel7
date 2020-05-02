<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Gestion\PhotoGestionInterface',
            'App\Gestion\PhotoGestion'
        );

        $this->app->bind(
            'App\Repositories\EmailRepositoryInterface',
            'App\Repositories\EmailRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
