<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\PrdocutController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SignINController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

#Userside
Route::get('/',[HomeController::class,'index'] );
Route::get('/about',[AboutController::class,'index'] );
Route::get('/collection',[CollectionController::class,'index'] );
Route::get('/ingredient',[IngredientController::class,'index'] );
Route::get('/product',[PrdocutController::class,'index'] );
Route::get('/privacy',[PrivacyController::class,'index'] );
Route::get('/signin',[SignINController::class,'index'] );
Route::get('/signup',[SignUpController::class,'index'] );
Route::get('/contact',[ContactController::class,'index'] );
Route::post('/register/user',[SignUpController::class,'store'] );
