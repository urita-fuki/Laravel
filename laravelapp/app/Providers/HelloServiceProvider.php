<?php

namespace App\Providers;

use Illuminate\Support\Facades\view;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'hello.index', function($view){
                $view->with('view_message', 'composer massage!');
            }
        );
    }
}
