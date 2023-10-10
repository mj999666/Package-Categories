<?php
namespace Returntrueir\Categories\Providers;
use Illuminate\Support\ServiceProvider;
use Returntrueir\Categories\Hello;

class CategoriesServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('return-categories' , function(){
            return new Hello;
        });
    }
}
