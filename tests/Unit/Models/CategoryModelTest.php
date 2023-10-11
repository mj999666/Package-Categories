<?php

namespace Returntrueir\Categories\Tests\Unit\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Returntrueir\Categories\Models\Category;
use Returntrueir\Categories\Tests\TestCase;

class CategoryModelTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateACategory()
    {
        $this->withoutExceptionHandling();
        $category = new Category;
        $category->title = "Test 1";
        $category->save();

    }
}