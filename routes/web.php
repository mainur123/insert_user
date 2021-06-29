<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAddController;

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

Route::get('/insert-user', function () {
    return view('insert');
});

Route::post('/store',[UserAddController::class,'store']);