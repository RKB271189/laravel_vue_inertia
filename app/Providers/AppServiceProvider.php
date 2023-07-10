<?php

namespace App\Providers;

use App\Repository\Product\ProductInterface;
use App\Repository\Product\ProductRepository;
use App\Repository\Profile\ProfileInterface;
use App\Repository\Profile\ProfileRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductInterface::class, ProductRepository::class);
        $this->app->bind(ProfileInterface::class, ProfileRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
