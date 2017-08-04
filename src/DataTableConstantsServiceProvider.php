<?php

namespace WellServicesGroup\DataTableConstants;

use Illuminate\Support\ServiceProvider;

class DataTableConstantsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('WellServicesGroup\DataTableConstants\DataTableConstants', function () {
            return new DataTableConstants();
        });
    }
}