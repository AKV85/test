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
    [ListingController::class, 'create']);

//store Listing Data
Route::post('/listings',
    [ListingController::class,'store']);

//show edit form
Route::get('/listings/{listing}/edit',
    [ListingController::class,'edit']);

//Edit submit to Update
Route::put('/listings/{listing}',
    [ListingController::class,'update']);


//Delete Listing
Route::delete('/listings/{listing}',
    [ListingController::class,'destroy']);

//single listing
Route::get('/listings/{listing}',
    [ListingController::class,'show']);

//show register/create form
Route::get('/register',
    [UserController::class,'create']);

//create new user
Route::post('/users',
    [UserController::class,'store']);












