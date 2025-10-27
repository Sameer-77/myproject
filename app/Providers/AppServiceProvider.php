<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\HomeContent;

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
        View::composer('*', function ($view) {
        // cache for 60 seconds or longer if you want
        $homeContents = cache()->remember('home_contents_all', 60, function () {
            return HomeContent::all()->keyBy('key');
        });

        $view->with('homeContents', $homeContents);
    });
    }
}
