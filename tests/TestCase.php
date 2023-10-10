<?php
//vendor/bin/phpunit
namespace Returntrueir\Categories\Tests;

use Returntrueir\Categories\Facades\CategoriesFacade;
use Returntrueir\Categories\Providers\CategoriesServiceProvider;
use \Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            CategoriesServiceProvider::class,
        ];
    }
    protected function getPackageAliases($app)
    {
        return [
            "Categories" => CategoriesFacade::class,
        ];
    }
}