<?php

namespace Returntrueir\Categories\Facades;
use Illuminate\Support\Facades\Facade;

class CategoriesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'return-categories';
    }
}