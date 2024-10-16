<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id'; // Define custom primary key

    // Define the fields that can be mass assigned
    protected $fillable = [
        'product_name',
        'category_id',
        'quantity_in_stock',
        'harga_beli',
        'harga_jual',
        'gambar',
        'deskripsi',
    ];

    // Relationship to the Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
