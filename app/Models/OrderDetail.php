<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey = 'order_details_id';
    protected $fillable = ['order_details_id', 'orders_id', 'products_id', 'products_name', 'products_price', 'products_sales_qty'];

    public function Order(){
        return $this->belongsTo(Order::class, 'orders_id');
    }
    public function Product(){
        return $this->belongsTo(Product::class, 'products_id');
    }
}
