<?php
namespace Returntrueir\Categories\Providers;
use Illuminate\Support\ServiceProvider;
use Returntrueir\Categories\Hello;

class CategoriesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        #$this->loadRoutesFrom(__DIR__."/../../routes/web.php");
        $this->loadViewsFrom(
            $this->basePath("resources/views/") ,
            "Categories"
        );
        $this->loadMigrationsFrom(
            $this->basePath("database/migrations")
        );
        $this->publishes([
            $this->basePath("resources/views/") => resource_path("views/vendor/Categories")
        ] , "Categories-views");

        $this->publishes([
           $this->basePath("config/categories.php") => base_path("config/categories.php")
        ], "Categories-config");
    }

    public function register()
    {
        $this->app->bind('return-categories' , function(){
            return new Hello;
        });

        $this->mergeConfigFrom($this->basePath("config/categories.php") , 'categories');
    }

    protected function basePath($path = '')
    {
        return __DIR__ . '/../../' . $path;
    }
}
