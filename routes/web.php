<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use GuzzleHttp\Middleware;

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

Route:: get('categorias', [
    CategoriaController::class, 'index'
])->name('categorias.index');



Route::group(['middleware'=> ['auth']], function(){
    Route:: get('productos-cliente',[
        ProductoController::class, 'index'
    ])->name('productos-cliente.index');
    
    Route:: get('productos',[
        ProductoController::class, 'show'
    ])->name('productos-cliente.show');
});

Route::group(['middleware'=> ['is_admin']], function(){
    Route::resource('productos', ProductoController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
