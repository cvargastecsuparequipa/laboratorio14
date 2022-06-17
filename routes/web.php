<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pizza;
use App\Models\Ingrediente;
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
    return view('app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index']);
Route::get('/categorias/create', [App\Http\Controllers\CategoriaController::class, 'create']);
Route::post('/categorias/insert', [App\Http\Controllers\CategoriaController::class, 'insert']);
Route::get('/categorias/{id}/edit', [App\Http\Controllers\CategoriaController::class, 'edit']);
Route::post('/categorias/update/{id}', [App\Http\Controllers\CategoriaController::class, 'update']);
Route::post('/categorias/delete/{id}', [App\Http\Controllers\CategoriaController::class, 'delete']);

//////////////////////////////// ARTICULOS/////////////////////////////////////////////
Route::get('/articulos', [App\Http\Controllers\ArticuloController::class, 'index']);
Route::get('/articulos/create', [App\Http\Controllers\ArticuloController::class, 'create']);
Route::post('/articulos/insert', [App\Http\Controllers\ArticuloController::class, 'insert']);
Route::get('/articulos/export', [App\Http\Controllers\ArticuloController::class, 'export']);
Route::get('/categorias/export', [App\Http\Controllers\CategoriaController::class, 'export']);
Route::get('/categorias/exportPdf', [App\Http\Controllers\CategoriaController::class, 'exportPdf']);
Route::get('/pizza', function () {
    $pizza = Pizza::with('ingredientes')->get();
    dd($pizza);

});
