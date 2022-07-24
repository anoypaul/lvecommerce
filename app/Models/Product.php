<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'products_id';
    protected $fillable = ['products_id', 'category_ms_id', 'sub_categories_id', 'brands_id', 'units_id', 'sizes_id', 'colors_id', 'products_code', 'products_name', 'products_description', 'products_price', 'products_image', 'products_status'];

    public function category(){
        return $this->belongsTo(Category_m::class, 'category_ms_id');
    }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class, 'sub_categories_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class, 'brands_id');
    }
    public function unit(){
        return $this->belongsTo(Unit::class, 'units_id');
    }
    public function size(){
        return $this->belongsTo(Size::class, 'sizes_id');
    }
    public function color(){
        return $this->belongsTo(Color::class, 'colors_id');
    }
}
