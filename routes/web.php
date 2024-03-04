<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MerchandisingController;
use App\Http\Controllers\InstrumentoController;
use App\Models\Instrumento;
use Spatie\Permission\Middleware\RoleMiddleware;

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
// iniciar de primera el Login
Route::redirect('/', '/login');

// Rutas que requieren autenticación
Route::middleware(['auth', RoleMiddleware::using('administrador')])->group(function () {
    // Primer modelo.
    Route::resource('products', ProductController::class);
    Route::resource('products.index', ProductController::class);

    // Segundo modelo
    Route::resource('merchandisings', MerchandisingController::class);
    Route::resource('merchandisings.index', MerchandisingController::class);

    //Tercer modelo
    Route::resource('instrumentos', InstrumentoController::class);
    Route::resource('instrumentos.index', InstrumentoController::class);

});

Route::middleware(['auth'])->group(function () {

     // Otras rutas que requieren autenticación
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
    
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');