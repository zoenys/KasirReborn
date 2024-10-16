<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('contents.index');
});

// Rute untuk halaman kasir
Route::get('/kasir', function () {
    return view('contents.kasir');
});


// Rute untuk halaman produk (menampilkan daftar produk)
Route::get('/produk', [ProductController::class, 'index'])->name('products.index');

// Rute untuk menyimpan produk
Route::post('/produk', [ProductController::class, 'store'])->name('products.store');

// Rute untuk memperbarui produk
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('products.update');

// Rute untuk menghapus produk
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Rute untuk halaman kelola stok
Route::get('/stok', [ProductController::class, 'manageStock'])->name('products.stock');

Route::post('/stok/{id}', [ProductController::class, 'updateStock'])->name('products.updateStock');

Route::post('/produk/category', [ProductController::class, 'storeCategory'])->name('products.category.store');