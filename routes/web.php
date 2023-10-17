<?php

use Illuminate\Support\Facades\Route;
use Returntrueir\Categories\Http\Controllers\HelloController;

Route::get("/test" , function (){
    return "Test";
});

/*Route::get("/test2" , "HelloController@index");
Route::get("/test-view" , "HelloController@testView");
Route::get("/test-lang" , "HelloController@testLang");*/

