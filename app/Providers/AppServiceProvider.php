<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('dashboard.index', function ($view) {

            $view->with('entries', \App\Entry::all()->load('categories'));

        });

        view()->composer('entries.show', function ($view) {
            // $id = $view->getData()['entry']->id;
            $view->with('questions', \App\Question::all());
            $view->with('comments', $view->getData()['entry']->comments);
        });
    }
}
