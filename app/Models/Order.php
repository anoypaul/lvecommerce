<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders'; 
    protected $primaryKey = 'orders_id'; 
    protected $fillable = ['orders_id', 'customers_id', 'shippings_id', 'payments_id', 'orders_total', 'orders_status']; 

    public function Customer(){
        return $this->belongsTo(Customer::class, 'customers_id');
    }
    public function Shipping(){
        return $this->belongsTo(Shipping::class, 'shippings_id');
    }
    public function Payment(){
        return $this->belongsTo(Payment::class, 'payments_id');
    }
}
