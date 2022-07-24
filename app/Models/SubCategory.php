<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $primaryKey = 'sub_categories_id';
    protected $fillable = ['sub_categories_id', 'category_ms_id', 'sub_categories_name', 'sub_categories_description', 'sub_categories_status'];

    public function category(){
        return $this->belongsTo(Category_m::class, 'category_ms_id');
    }
}
