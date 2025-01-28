<?php

namespace App\Providers;
use App\Core\Bootstrap;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        // Update defaultStringLength
        Builder::defaultStringLength(191);

        Bootstrap::init();
    }
}
