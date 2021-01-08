<?php

namespace App\Providers;

use App\Http\Controllers\Hook\AppleController;
use App\Subscription\RequestParser;
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
        $this->app->when(AppleController::class)
            ->needs(RequestParser::class)
            ->give(RequestParser\Apple::class);
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
