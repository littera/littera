<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * ## Validation Rule
         *
         * #### login
         *
         * The field under validation may have alpha-numeric characters latin alphabet, as well as dashes and underscores.
         * Not allowed to use a dash or underscore at the beginning or end of the string and as one by one.
         *
         */
        $this->app['validator']->extend('login', function ($attribute, $value, $parameters) {
            return preg_match('/^([a-z0-9]+[-_])*[a-z0-9]+$/i', $value);
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
