<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\MangeChefController;
use App\Http\Controllers\Admin\OurChefController;
use App\Http\Controllers\Admin\UserManagementController;
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

#Adminside
Route::get('/gymmer/admin',[DashbordController::class,'index'] );
Route::get('/user',[UserManagementController::class,'index'] );
Route::post('/userdelete',[UserManagementController::class,'destroy'] );
Route::get('/managechef',[OurChefController::class,'index'] );
Route::post('/ourchefs',[OurChefController::class,'store'] );
Route::get('/managechefs',[MangeChefController::class,'index'] );

// Route::get('/useredit/{id}', [UserManagementController::class, 'edit'])->name('user.edit');
// Route::put('/userupdate/{id}', [UserManagementController::class, 'update'])->name('user.update');
