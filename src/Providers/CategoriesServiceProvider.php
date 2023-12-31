<?php
namespace Returntrueir\Categories\Providers;
use Illuminate\Support\ServiceProvider;
use Returntrueir\Categories\Hello;

class CategoriesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        #$this->loadRoutesFrom( $this->basePath("routes/web.php"));
        $this->loadRoutesFrom( $this->basePath("routes/dashboard.php"));

        $this->loadViewsFrom(
            $this->basePath("resources/views/") ,
            "Categories"
        );
        $this->loadMigrationsFrom(
            $this->basePath("database/migrations")
        );

        $this->loadTranslationsFrom(
            $this->basePath('lang') ,
            'Categories'
        );

        $this->publishes([
            $this->basePath('lang') => base_path("lang/vendor/Categories") ,
            'returntrueir-categories-translations'
        ]);

        $this->publishes([
            $this->basePath("database/migrations") => database_path('migrations')
        ],'returntrueir-categories-migrations');
        $this->publishes([
            $this->basePath("resources/views/") => resource_path("views/vendor/Categories")
        ] , "returntrueir-categories-views");

        $this->publishes([
           $this->basePath("config/categories.php") => base_path("config/categories.php")
        ], "returntrueir-categories-config");

        $this->publishes([
            $this->basePath('resources/static') => public_path("vendor/categories")
        ], "returntrueir-categories-static-assets");
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
