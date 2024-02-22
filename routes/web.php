<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('/', '/login');

Route::resource('products', ProductController::class);

Route::get('/principal/health', function () {
    return view('principal.health');
});

Route::get('/principal/client', function () {
    return view('principal.client');
});

Route::get('/principal/contact', function () {
    return view('principal.contact');
});

Route::get('/principal/index', function () {
    return view('principal.index');
});

Route::get('/principal/medicine', function () {
    return view('principal.medicine');
});

Route::get('/principal/news', function () {
    return view('principal.news');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');