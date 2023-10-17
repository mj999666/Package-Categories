<?php
//vendor/bin/phpunit
namespace Returntrueir\Categories\Tests;

use Returntrueir\Categories\Facades\CategoriesFacade;
use Returntrueir\Categories\Providers\CategoriesServiceProvider;
use \Orchestra\Testbench\TestCase as BaseTestCase;
use Returntrueir\Categories\Providers\RouteServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set("database.default",'testing');
        $app['config']->set("database.connection.testing",[
            'driver' => 'sqlite' ,
            'database' => ':memory:'
        ]);

        /*$app['config']->set("database.default.testing",[
            'username' => 'root' ,
            'password' => ''
        ]);*/

    }

    protected function getPackageProviders($app)
    {
        return [
            CategoriesServiceProvider::class,
            #RouteServiceProvider::class,
        ];
    }
    protected function getPackageAliases($app)
    {
        return [
            "Categories" => CategoriesFacade::class,
        ];
    }
}