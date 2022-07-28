<?php

namespace Ziad181\DatabaseOfCountriesAndCities;

use Illuminate\Support\ServiceProvider;

class CountriesServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../database/migrations' => database_path('migrations'),]);
        $this->publishes([__DIR__ . '/../database/seeders' => database_path('seeders'),]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
