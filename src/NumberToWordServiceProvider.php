<?php

namespace bushart\numbertowords;
use bushart\numbertowords\NumberToWord;
use Illuminate\Support\ServiceProvider;

class NumberToWordServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('numberToWords', function () {
            return new NumberToWord;
        });
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('numbertowords.php'),
        ], 'config');

    }
}
