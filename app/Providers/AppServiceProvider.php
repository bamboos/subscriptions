<?php

namespace App\Providers;

use App\Http\Controllers\Hook\AppleController;
use App\Subscription\Manager;
use App\Subscription\RequestParser;
use App\Subscription\Storage;
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

        $this->app->when(Manager::class)
            ->needs(Storage::class)
            ->give(Storage\Eloquent::class);
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
