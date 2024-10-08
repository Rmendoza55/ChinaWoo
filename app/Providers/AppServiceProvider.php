<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('num_doc', function ($attribute, $value, $parameters, $validator) {
            // Validar que el número de documento sea numérico y tenga una longitud específica, por ejemplo 8 dígitos
            return is_numeric($value) && strlen($value) === 8;
        });
    }
}
