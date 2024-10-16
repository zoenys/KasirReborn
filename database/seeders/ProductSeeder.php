<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Produk manual dengan gambar yang sama (spesimen.png)
        Product::create([
            'product_name' => 'Laptop',
            'category_id' => 1,  // Electronics category
            'quantity_in_stock' => 100,
            'harga_beli' => 1200.00,
            'harga_jual' => 1500.00,
            'gambar' => 'assets/images/spesimen.png',  // Semua produk menggunakan gambar spesimen.png
            'deskripsi' => 'Laptop berkualitas dengan spesifikasi tinggi.',
        ]);

        Product::create([
            'product_name' => 'Sofa',
            'category_id' => 2,  // Furniture category
            'quantity_in_stock' => 50,
            'harga_beli' => 250.00,
            'harga_jual' => 300.00,
            'gambar' => 'assets/images/spesimen.png',  // Menggunakan gambar spesimen.png
            'deskripsi' => 'Sofa nyaman untuk ruang tamu modern.',
        ]);

        Product::create([
            'product_name' => 'T-shirt',
            'category_id' => 3,  // Clothing category
            'quantity_in_stock' => 200,
            'harga_beli' => 15.00,
            'harga_jual' => 20.00,
            'gambar' => 'assets/images/spesimen.png',  // Menggunakan gambar spesimen.png
            'deskripsi' => 'Kaos nyaman berbahan katun.',
        ]);

        // Tambahkan produk lainnya menggunakan gambar spesimen.png
        for ($i = 1; $i <= 47; $i++) {
            Product::create([
                'product_name' => 'Product ' . $i,
                'category_id' => Category::inRandomOrder()->first()->category_id,
                'quantity_in_stock' => rand(10, 500),
                'harga_beli' => rand(5, 800),
                'harga_jual' => rand(10, 1000),
                'gambar' => 'assets/images/spesimen.png',  // Menggunakan gambar spesimen.png untuk semua produk
                'deskripsi' => 'Deskripsi untuk produk ' . $i,
            ]);
        }
    }
}
