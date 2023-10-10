<?php
namespace Returntrueir\Categories\Providers;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        var_dump("U ARE here in CT");
        exit();
    }

    public function register()
    {

    }
}
