<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Events\LocaleUpdated;
use Illuminate\Routing\Events\RouteMatched;
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
        $this->app['events']->listen(RouteMatched::class, function () {
            // App::setLocale(Session::get('locale', config('app.locale')));
        });
    }
}
