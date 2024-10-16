<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';  // Primary key dari tabel order_details

    protected $fillable = [
        'order_id',
        'user_id',
        'order_date',
        'created_at',
        'updated_at'
    ];

    // Relasi ke tabel produk (Order detail belongs to a product)
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    // Relasi ke tabel user (Order detail belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
