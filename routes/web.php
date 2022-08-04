<?php

use App\Http\Controllers\InformationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InformationController as Admininfo;
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

Route::get('/registr', function () {
    return view('registr');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('welcome');
});

Route::get('/information', function () {
    return view('information');
});

Route::resource('user', UserController::class);
Route::resource('information', InformationController::class);
Route::resource('admininfo', AdminInfo::class);
