<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;


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

        Validator::extend('custom_url', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^www\..*\.com$/', $value);
        });
        Validator::replacer('custom_url', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'The URL must be a valid with www and .com');
        });
    }
}
