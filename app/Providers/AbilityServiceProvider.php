<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/30/17 3:45 PM
 */

namespace App\Providers;

use App\Service\AbilityService;
use Illuminate\Support\ServiceProvider;

class AbilityServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AbilityService::class, function () {
            return new AbilityService();
        });
    }
}