<?php

namespace Returntrueir\Categories\Tests\Unit;


use Returntrueir\Categories\Tests\TestCase;
use Categories;

class HelloTest extends TestCase
{

    public function testFindText()
    {

        $this->assertTrue(true);
        $this->assertEquals(
            "msg from Hello" ,
            Categories::hello()
        );
    }

}