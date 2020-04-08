<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        {
            $this->loadViewsFrom(__DIR__.'/path/to/views', 'courier');

            $this->publishes([
                __DIR__.'/path/to/views' => base_path('resources/views/vendor/courier'),
            ]);
        }
    }
}
