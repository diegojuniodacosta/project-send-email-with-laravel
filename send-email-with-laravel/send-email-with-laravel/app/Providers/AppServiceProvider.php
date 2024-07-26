<?php

namespace App\Providers;

use App\Application\Services\ProductService;
use App\Infrastructure\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductRepository::class, function ($app) {
            return new ProductRepository();
        });

        $this->app->singleton(ProductService::class, function ($app) {
            return new ProductService($app->make(ProductRepository::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
