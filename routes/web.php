<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CarritoController;

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

Route::middleware([
    'auth:sanctum',
    'verified'
])->group(function () {
    Route::resource('/productos', ProductoController::class );
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});

Route::get('/products', [ProductController::class, 'index']);



Route::get('/catalogo', [CatalogoController::class, 'Catalogo'])->name('catalogo');


Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');



Route::get('/comprar', [ProductoController::class, 'mostrarComprar'])->name('comprar.mostrar');




// Rutas para el carrito
// routes/web.php

Route::get('/cart', 'CartController@showCart');
Route::post('/cart/add', 'CartController@addToCart');
Route::post('/cart/remove', 'CartController@removeFromCart');

// routes/web.php

Route::get('/cart', 'CartController@showCart');


