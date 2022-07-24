<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_m extends Model
{
    use HasFactory;
    protected $table = 'category_ms';
    protected $primaryKey = 'category_ms_id';
    protected $fillable = ['category_ms_id', 'category_ms_name', 'category_ms_status'];
}
