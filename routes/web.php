<?php

use App\Http\Controllers\InformationController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/registr', function(){
    return view('registr');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/logout', [UserController::class, 'logout']);
Route::get('/store', [UserController::class, 'store']);
Route::get('/create_information', [InformationController::class, 'store']);

