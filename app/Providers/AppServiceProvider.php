<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\HomeContent;
use App\Models\Footer;
use App\Models\Contact;

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
            // Cache for 60 seconds to improve performance
            $homeContents = cache()->remember('home_contents_all', 60, function () {
                return HomeContent::all()->keyBy('key');
            });

            $footers = cache()->remember('footers_all', 60, function () {
                return Footer::all();
            });

            $siteContact = cache()->remember('site_contact', 60, function () {
                return Contact::first();
            });

            $view->with([
                'homeContents' => $homeContents,
                'footers' => $footers,
                'siteContact' => $siteContact,
            ]);
        });
    }
}
