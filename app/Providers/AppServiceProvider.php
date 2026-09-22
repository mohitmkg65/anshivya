<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\SiteInfo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        View::composer(['layouts.app', 'pages.contact'], function ($view) {
            if (Schema::hasTable('site_infos')) {
                $view->with('siteInfo', SiteInfo::first());
            }
        });
    }
}
