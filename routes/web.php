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
    $title = "Home page";
    return view('welcome',["title"=>$title]);
});
Route::get('/shop', function () {
    $title = "Shop Cart";
    return view('shop',["title"=>$title]);
});

Route::get('/about', function () {
    $title = "About us";
    return view('about',["title"=>$title]);
});
Route::get('/contact', function () {
    $title = "Contact page";
    return view('contact',["title"=>$title]);
});


