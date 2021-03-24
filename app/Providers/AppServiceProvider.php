<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\WelcomeSection;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        $sitesetting=Setting::first();
        // dd($sitesetting);
        View::share('sitesetting', $sitesetting);
        $sliders =Slider::orderBy('order', 'asc')->get();
        View::share('sliders', $sliders);
        $welcomesection = WelcomeSection::orderBy('id', 'desc')->first();
        View::share('welcomesection', $welcomesection);
    }
}
