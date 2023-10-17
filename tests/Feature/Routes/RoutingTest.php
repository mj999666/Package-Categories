<?php

namespace Returntrueir\Categories\Tests\Feature\Routes;

use Returntrueir\Categories\Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testTestRouteExist()
    {
        $this->withoutExceptionHandling();
        $this->get("test")->assertSuccessful();
    }
    public function testTest2RouteExist()
    {
        $this->withoutExceptionHandling();
        $this->get("test2")->assertSuccessful();
    }
    public function testCategoryStoreRouteExist()
    {
        $this->withoutExceptionHandling();
        $this->get("category/create")->assertSuccessful();
    }
/*    public function testTest3RouteExist()
    {
        $this->withoutExceptionHandling();
        $this->get("test3")->assertSuccessful();
    }*/
}