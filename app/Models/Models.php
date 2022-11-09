<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $fillable = ['id','name','typefuel','year', 'brand_id','category_id'];
    use HasFactory;

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'model_category', 'model_id', 'category_id');
    }
}
