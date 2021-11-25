<?php

namespace Tiagoandrepro\Lms\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/../../src/routes.php');

        $this->publishes([
            __DIR__.'/../../src/resources/views' => resource_path('views')
        ]);

        $this->publishes([
           __DIR__.'/../../src/dashboard.php' => config_path('dashboard.php'),
        ]);

        $this->publishes([
            __DIR__ . '/../../src/public' => public_path('assets'),
        ]);

    }
}
