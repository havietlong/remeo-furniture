<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_detail extends Model
{
    use HasFactory;
    protected $table = 'orders_detail';
    public $timestamps = false;
    protected $fillable = [
        'id_order',
        'id_product',
        'quantity'
    ];
}
