<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContabilityController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\TechnicalSupportController;
use App\Http\Controllers\SalesPcController;
use App\Http\Controllers\TeamsWorkController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\GiftSoftcodiController;
use App\Http\Controllers\SaleController;
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
Route::get('/sorteos', [ClientsController::class, 'index'])->name('gift');

Route::get('/admin/ventas', [SaleController::class, 'index'])->name('sale');
Route::get('/admin/agregar-venta', [SaleController::class, 'create'])->name('create');
Route::post('/admin/store-venta', [SaleController::class, 'store'])->name('store');
Route::post('/admin/limpiar-ventas', [SaleController::class, 'limpiar_ventas'])->name('limpiar_ventas');
Route::post('/admin/borrar-venta', [SaleController::class, 'borrar_venta'])->name('borrar_venta');

Route::get('/admin/sorteo', [GiftSoftcodiController::class, 'index'])->name('admin_gift');
Route::get('/admin/agregar-sorteo', [GiftSoftcodiController::class, 'create'])->name('create_gift');
Route::post('/admin/store-sorteo', [GiftSoftcodiController::class, 'store'])->name('store_gift');
Route::get('/admin/editar-sorteo/{id}', [GiftSoftcodiController::class, 'edit'])->name('edit_gift');
Route::post('/admin/update-sorteo/', [GiftSoftcodiController::class, 'update'])->name('update_gift');
Route::post('/admin/borrar-sorteo', [GiftSoftcodiController::class, 'delete_gift'])->name('delete_gift_');

Route::get('/admin/clientes', [ClientsController::class, 'index_clients'])->name('index_clients');



