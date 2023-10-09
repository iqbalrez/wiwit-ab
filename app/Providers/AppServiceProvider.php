<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(\App\Interfaces\PartnerInterface::class, \App\Repositories\PartnerRepository::class);
        $this->app->bind(\App\Interfaces\MessageInterface::class, \App\Repositories\MessageRepository::class);
        $this->app->bind(\App\Interfaces\SocialMediaInterface::class, \App\Repositories\SocialMediaRepository::class);
        $this->app->bind(\App\Interfaces\TestimonialInterface::class, \App\Repositories\TestimonialRepository::class);
        $this->app->bind(\App\Interfaces\WorkCategoryInterface::class, \App\Repositories\WorkCategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
