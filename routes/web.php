<?php
//Diego zenan perez perera
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//Ruta raíz
Route::get('', function () {
    return view('home');
});

//Ruta con endpoint "product" que obtiene datos desde la función "store" del controlador.
//Se necesita que haya un protocolo GET para que reciba la información del formulario.
Route::get('/product/store', function () {
    return redirect()->route('product.create');
});
//Y luego se manda con el protocolo POST
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

// Ruta GET que muestra el formulario de creación de productos
Route::get('/product/create', function () {
    return view('product');
})->name('product.create');

