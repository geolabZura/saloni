<?php

namespace App\Providers;

use App\BackgroundImage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $home_page_image = BackgroundImage::where('position_name', 'home_page_image')->first()->image;
        $body_image = BackgroundImage::where('position_name', 'body_image')->first()->image;
        view()->share('home_page_image', $home_page_image);
        view()->share('body_image', $body_image);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
