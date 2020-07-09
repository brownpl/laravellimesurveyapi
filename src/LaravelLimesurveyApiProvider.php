<?php

namespace brownpl\laravellimesurveyapi;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelLimesurveyApiProvider
 *
 * @package LaravelLimesurveyApi
 */
class LaravelLimesurveyApiProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot ()
    {
        $this->publishes([
            __DIR__ . '/../config/limesurvey.php' => config_path( 'limesurvey.php' ),
        ]);

        $this->mergeConfigFrom(__DIR__.'/../config/limesurvey.php', 'limesurvey');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register ()
    {
        $this->app->singleton(LimesurveyApi::class, function () {
            return new LimesurveyApi(
                config('limesurvey.url'),
                config('limesurvey.username'),
                config('limesurvey.password')
            );
        });
    }
}
