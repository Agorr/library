<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Author;
use App\Models\Category;

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
        View::composer('sidebar', function ($view) {
            $view->with('authors', Author::all());
        });

        View::composer('sidebar', function ($view) {
            $view->with('categories', Category::all());
        });

        View::share([
            'Color1' => '#fff', //white
            'Color2' => '#0D6EFD', // blue
            'Color3' => '#807777', // light gray
            'Color4' => '#212529', // dark gray
          ]);
    }
}
