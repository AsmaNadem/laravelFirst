<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as MyView;

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
//        Blade::if('checkVal' , function(string $value){
//        return config('app.timezone')===$value;
//    });

        View::composer('*' , function (MyView $view){

            return $view->with(['myvar'=>'']);
        });


    }
}
