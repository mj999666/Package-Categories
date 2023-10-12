<?php
namespace Returntrueir\Categories\Tests\Feature\Views;
use Returntrueir\Categories\Tests\TestCase;

class ViewsTest extends TestCase
{
    public function testWelcomeMessageExist()
    {
        $response = $this->get('/test-lang');
        $response->assertSee('Welcome');
    }

}