<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Property;
use App\PropertyImages;

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
        $img = '';
        $img_url = 'https://corporatefinanceinstitute.com/assets/real-estate-768x461.jpeg';
        Schema::defaultStringLength(191);
        if (Schema::hasTable('property_images'))
        {
            if(PropertyImages::count() > 0 ){
                $img = PropertyImages::all()->random()->image_path;
                View::share('image_path', $img);
            };


        }


        View::share('image_url', $img_url);

    }
}
