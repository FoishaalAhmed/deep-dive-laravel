<?php

namespace App\Providers;

use App\Services\ApiConnection;
use App\View\Composer\GreetingComposer;
use App\View\Composer\SettingComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ApiConnection::class, function ($app) {
            return new ApiConnection();
        });


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('greeting', SettingComposer::class);
        View::composer('admin.greetings', GreetingComposer::class);
    }
}
