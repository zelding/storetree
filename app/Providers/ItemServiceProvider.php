<?php

namespace App\Providers;

use App\Service\ItemService;
use Illuminate\Support\ServiceProvider;

class ItemServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ItemService::class, function () {
            return new ItemService();
        });
    }
}
