<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        Validator::extend('denied_with', function ($attribute, $value, $parameters, $validator) {
            /**@var \Illuminate\Validation\Validator $validator */

            return array_key_exists($attribute, $validator->getData()) && !array_key_exists($parameters[0], $validator->getData());
        });

        Validator::extend('greater_or_equal_than', function($attribute, $value, $parameters, $validator) {
            /**@var \Illuminate\Validation\Validator $validator */

            $min_field = $parameters[0];
            $data      = $validator->getData();
            $min_value = $data[ $min_field ];

            return $value >= $min_value;
        });

        Validator::replacer('denied_with', function ($message, $attribute, $rule, $parameters) {
            return "The field ".$attribute ." is not allowed in combination with ".$parameters[0].".";
        });

        Validator::replacer('greater_or_equal_than', function($message, $attribute, $rule, $parameters) {
            return str_replace(':field', $parameters[0], $message);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'final') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
