<?php
namespace Returntrueir\Categories\Providers;
use Illuminate\Support\ServiceProvider;
use Returntrueir\Categories\Hello;

class CategoriesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/../../routes/web.php");
    }

    public function register()
    {
        $this->app->bind('return-categories' , function(){
            return new Hello;
        });
    }
}
