<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Force in-memory cache and cookie session so SQLite is never written to for cache/sessions
        if (config('cache.default') === 'database') {
            config(['cache.default' => 'array']);
        }
        if (config('session.driver') === 'database') {
            config(['session.driver' => 'cookie']);
        }

        if (
            config('app.env') === 'production' ||
            !empty($_SERVER['VERCEL']) ||
            (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
            (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        ) {
            URL::forceScheme('https');
        }
    }
}
