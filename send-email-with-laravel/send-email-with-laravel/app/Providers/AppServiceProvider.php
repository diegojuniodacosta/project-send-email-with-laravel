<?php

namespace App\Providers;

use App\Interface\TransportRepositoryInterface;
use App\Interface\TransportServiceInterface;
use App\Repository\TransportRepository;
use App\Services\TransportServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->bind(TransportRepositoryInterface::class, TransportRepository::class);

        $this->app->bind(TransportServiceInterface::class, TransportServices::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
