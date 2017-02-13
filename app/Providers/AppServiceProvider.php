<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('denied_with', function ($attribute, $value, $parameters, $validator) {
            /**@var \Illuminate\Validation\Validator $validator */

            return array_key_exists($attribute, $validator->getData()) && !array_key_exists($parameters[0], $validator->getData());
        });

        Validator::replacer('denied_with', function ($message, $attribute, $rule, $parameters) {
            return "The field ".$attribute ." is not allowed in combination with ".$parameters[0].".";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
