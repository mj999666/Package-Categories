<?php
use Illuminate\Support\Facades\Route;
use Returntrueir\Categories\Http\Controllers\Dashboard\CategoryController;
#Route::resource("/category" , CategoryController::class)->except(['show']);


Route::get("/category/create" , [CategoryController::class , "create"])->name("dashboard.category.create");
Route::post("/category/store" , [CategoryController::class , "store"])->name("dashboard.category.store");