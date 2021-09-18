<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        view()->composer('client.*',function ($view){
            $view->with([
                'user'=>auth()->user()
            ]);
        });
        view()->composer('Panel.*',function ($view){
            $view->with([
                'user'=>auth()->user()
            ]);
        });
    }
}
