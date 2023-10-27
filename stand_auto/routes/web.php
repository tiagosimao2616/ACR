<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarrosController;

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

Route::get('/carros', [CarrosController::class, "index"]);
Route::get('/carros/{id}', [CarrosController::class, "show"]);


Route::get('/detalhes', function () {
    return view('detalhes');
});
