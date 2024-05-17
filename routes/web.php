<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugueteController;
use App\Http\Controllers\CategoriaController;
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
    return view('welcome');
});

// Route::get('/index', function () {
//     return view('holamundo');
// });

//rutass
// Route::get('/juguete', [JugueteController::class. 'index'])->name('juguete.index');
// Route::get('/juguete/create', [JugueteController::class. 'create'])->
Route::resource('juguete',JugueteController::class);
Route::resource('categoria',CategoriaController::class);