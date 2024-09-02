<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/inicio', function(){
//     return view('home');
// });



// Route::get('products',[ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('products', [ProductController::class, 'store'])->name('products.sote');

// Rota para a página inicial
Route::get('/home', function () {
    return view('home');
})->name('inicio');

// Rota para criar um novo produto
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Rota para armazenar o produto (deve corresponder ao método de armazenamento no controlador)
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Rota para listar produtos
Route::get('/products', [ProductController::class, 'index'])->name('listar');
