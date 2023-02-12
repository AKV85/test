<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//index
//show
//create
//store
//edit
//update
//delete

//all listings
Route::get('/',[ListingController::class, 'index']);
//
////single listing
//Route::get('/listings/{listing}',
//    [ListingController::class,'show']);

//show create form
Route::get('/listings/create',
    [ListingController::class, 'create'])->middleware('auth');

//store Listing Data
Route::post('/listings',
    [ListingController::class,'store'])->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit',
    [ListingController::class,'edit'])->middleware('auth');

//Edit submit to Update
Route::put('/listings/{listing}',
    [ListingController::class,'update'])->middleware('auth');


//Delete Listing
Route::delete('/listings/{listing}',
    [ListingController::class,'destroy'])->middleware('auth');

//single listing
Route::get('/listings/{listing}',
    [ListingController::class,'show']);

//show register/create form
Route::get('/register',
    [UserController::class,'create'])->middleware('quest');

//create new user
Route::post('/users',
    [UserController::class,'store']);

//log user out
Route::post('/logout',
    [UserController::class,'logout'])->middleware('auth');

//show login form
Route::get('/login',
    [UserController::class,'login'])->name('login')->middleware('quest');

//login user
Route::post('/users/authenticate',
    [UserController::class,'authenticate']);











