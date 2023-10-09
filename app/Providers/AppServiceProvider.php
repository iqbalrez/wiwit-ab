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
        $this->app->bind(\App\Interfaces\BlogCategoryInterface::class, \App\Repositories\BlogCategoryRepository::class);
        $this->app->bind(\App\Interfaces\BlogInterface::class, \App\Repositories\BlogRepository::class);
        $this->app->bind(\App\Interfaces\MaterialCategoryInterface::class, \App\Repositories\MaterialCategoryRepository::class);
        $this->app->bind(\App\Interfaces\MaterialInterface::class, \App\Repositories\MaterialRepository::class);
        $this->app->bind(\App\Interfaces\WorkCategoryInterface::class, \App\Repositories\WorkCategoryRepository::class);
        $this->app->bind(\App\Interfaces\EventCategoryInterface::class, \App\Repositories\EventCategoryRepository::class);
        $this->app->bind(\App\Interfaces\EventInterface::class, \App\Repositories\EventRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
