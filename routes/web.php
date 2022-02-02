<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

use App\Http\Middleware\LogAcessoMiddleware;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[PrincipalController::class,'principal'])->name('site.index');

Route::get('/auth/{erro?}', [App\Http\Controllers\LoginController::class,'index'])->name('site.auth');
Route::post('/auth', [App\Http\Controllers\LoginController::class,'autenticar'])->name('site.auth');
Route::post('/pedir', [App\Http\Controllers\PedidosController::class,'cadastrar'])->name('site.pedir');


Route::middleware(LogAcessoMiddleWare::class)->prefix('/admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class,'index'])->name('admin.painel');
    Route::get('/pedidos', [App\Http\Controllers\PedidosController::class,'index'])->name('admin.pedidos');
    Route::post('/produtos', [App\Http\Controllers\ProdutosController::class,'index'])->name('admin.produtos');
    Route::post('/produtos/novo', [App\Http\Controllers\ProdutosController::class,'novo'])->name('admin.produtos.novo');
    Route::post('/produtos/atualiza', [App\Http\Controllers\ProdutosController::class,'atualiza'])->name('admin.produtos.atualiza');
    Route::post('/produtos/deletar', [App\Http\Controllers\ProdutosController::class,'deletar'])->name('admin.produtos.deleta');
    Route::get('/sair', [App\Http\Controllers\LoginController::class,'sair'])->name('admin.sair');
});