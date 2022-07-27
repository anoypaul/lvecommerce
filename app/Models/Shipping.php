<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $table = 'shippings';
    protected $primaryKey = 'shippings_id';
    protected $fillable = ['shippings_id', 'shippings_name', 'shippings_email', 'shippings_address', 'shippings_city', 'shippings_country', 'shippings_zip_code', 'shippings_phone'];
}
