<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    protected $fillable = ['id','name','typefuel','year', 'brand_id'];
    use HasFactory;

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function categorys(){
        return $this->belongsToMany(Category::class, 'model_category', 'models_id', 'category_id');
    }
}
