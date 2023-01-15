<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\InicioController;
Route::get('/', [InicioController::class, 'index']);

use App\Http\Controllers\EntrarController;
Route::get('/entrar', [EntrarController::class, 'index']);

use App\Http\Controllers\PainelController;
Route::get('/painel', [PainelController::class, 'index']);

use App\Http\Controllers\AviarioController;
Route::get('/aviario', [AviarioController::class, 'index']);

use App\Http\Controllers\ConfiguracaoController;
Route::get('/configuracao', [ConfiguracaoController::class, 'index']);

