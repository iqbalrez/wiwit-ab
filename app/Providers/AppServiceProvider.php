<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(\App\Interfaces\PartnerInterface::class, \App\Repositories\PartnerRepository::class);
        $this->app->bind(\App\Interfaces\MessageInterface::class, \App\Repositories\MessageRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
