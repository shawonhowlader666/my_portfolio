<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            \Illuminate\Support\Facades\URL::forceScheme('https');

            // Force drivers on Vercel to avoid Read-Only DB errors
            config(['cache.default' => 'array']);
            config(['session.driver' => 'cookie']);
            config(['queue.default' => 'sync']);
            config(['database.connections.sqlite.database' => database_path('database.sqlite')]);
        }
    }
}
