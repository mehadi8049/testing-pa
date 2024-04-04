<?php

namespace Mehadi\TestingPa;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('test', function($app) {
            return new \Mehadi\TestingPa\Test();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/Test.php', 'test'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/Test.php' => config_path('Test.php'),
        ]);
    }
}