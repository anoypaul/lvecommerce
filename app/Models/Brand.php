<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $primaryKey = 'brands_id';
    protected $fillable = ['brands_id ', 'brands_name ', 'brands_description', 'brands_status'];
}
