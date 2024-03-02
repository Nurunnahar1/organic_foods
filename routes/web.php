<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('backend.layouts.app');
    return view('frontend.layouts.app');
});
Route::get('/backend', function () {
    // return view('backend.layouts.app');
    return view('backend.pages.dashboard');
});
