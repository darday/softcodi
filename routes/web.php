<?php

use App\Http\Controllers\ContabilityController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\TechnicalSupportController;
use App\Http\Controllers\SalesPcController;
use App\Http\Controllers\TeamsWorkController;
use App\Http\Controllers\DesignController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/contabilidad', [ContabilityController::class, 'index'])->name('contability');
Route::get('/desarrollo-web', [DevelopmentController::class, 'index'])->name('web_pages');
Route::get('/mantenimiento-pcs', [TechnicalSupportController::class, 'index'])->name('maintenance_pcs');
Route::get('/ventas-repuestos', [SalesPcController::class, 'index'])->name('sales_accessories');
Route::get('/equipo-de-trabajo', [TeamsWorkController::class, 'index'])->name('teamsw');
Route::get('/diseño-grafico', [DesignController::class, 'index'])->name('design');


