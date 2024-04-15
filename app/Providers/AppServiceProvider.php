<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */


    // ila chi wa7ed talab IngrediantRepositoryInterface, 3ti lih instance mn IngrediantRepository
    public function register()
    {
        $this->app->bind(\App\Repositories\ThemeRepositoryInterface::class, \App\Repositories\ThemeRepository::class);

       $this->app->bind(
        \App\Repositories\IngrediantRepositoryInterface::class,
        \App\Repositories\IngrediantRepository::class
    );

    $this->app->bind(
        \App\Repositories\RecipeRepositoryInterface::class,
        \App\Repositories\RecipeRepository::class
    );
    }
    
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
