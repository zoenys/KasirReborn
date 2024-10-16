<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;

class Order extends Model
{
    use HasFactory;

    // Relasi ke tabel order details
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
