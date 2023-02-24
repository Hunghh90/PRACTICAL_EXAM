<?php

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

Route::get('/',[App\Http\Controllers\StudentController::class,"list"]);
Route::get("/create",[App\Http\Controllers\StudentController::class,"createStudent"]);
Route::post('/create',[App\Http\Controllers\StudentController::class,"create"]);


