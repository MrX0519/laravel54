<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //mb4string 1000/4 = 250.xxx
        Schema::defaultStringLength(250);
        //Carbon::setLocale('zh');

        \View::composer('layout.sidebar',function($view){
            $topics = \App\Topic::all();
            $view->with('topics',$topics);
        });

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
