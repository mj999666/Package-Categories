<?php

namespace Returntrueir\Categories\Http\Controllers;

class HelloController
{
    public function index()
    {
        return "Test2";
    }

    public function testView()
    {
        return view("Categories::testView");
    }
}