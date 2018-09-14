<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->topMenu();
    }

    //Top menu for Users
    public function topMenu(){
      View::composer('layouts.header', function($view){
        $view->with('categories', \App\Category::where('parent_id', 0)->where('published', 1)->get());
      });
    }
}
