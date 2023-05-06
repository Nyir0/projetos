<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projetosController;

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
    return view('home');
});
route::get('/home/projetos', [projetosController::class, 'layout_projetos'])->name('layout_projetos');
