<?php

namespace Wovosoft\BdHrmProfile;

use Illuminate\Support\ServiceProvider;

class BdHrmProfileServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'wovosoft');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'wovosoft');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/bd-hrm-profile.php', 'bd-hrm-profile');

        // Register the service the package provides.
        $this->app->singleton('bd-hrm-profile', function ($app) {
            return new BdHrmProfile;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['bd-hrm-profile'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/bd-hrm-profile.php' => config_path('bd-hrm-profile.php'),
        ], 'bd-hrm-profile.config');

        // Publishing the migrations.
        $this->publishes([
            __DIR__ . '/../database/migrations' => base_path('database/migrations'),
        ], 'bd-hrm-profile.migrations');

        // Publishing the factories.
        $this->publishes([
            __DIR__ . '/../database/factories' => base_path('database/factories'),
        ], 'bd-hrm-profile.factories');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/wovosoft'),
        ], 'bd-hrm-profile.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/wovosoft'),
        ], 'bd-hrm-profile.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/wovosoft'),
        ], 'bd-hrm-profile.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
