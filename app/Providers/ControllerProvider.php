<?php

namespace Xstore\Providers;

use Illuminate\Support\ServiceProvider;

class ControllerProvider extends ServiceProvider
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
        $this->app->singleton('c_attachment',\Xstore\Http\Controllers\Backend\AttachmentController::class);
        $this->app->singleton('c_order',\Xstore\Http\Controllers\Backend\OrderController::class);
        $this->app->singleton('c_ship',\Xstore\Http\Controllers\Backend\ShipController::class);
    }
}
