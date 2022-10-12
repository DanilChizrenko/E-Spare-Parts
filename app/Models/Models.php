<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $fillable = ['id','name','typefuel','year'];
    use HasFactory;

    public function brand(){
        return $this->belongsTo(related:Brands::class);
    }

    public function categorys(){
        return $this->belongsToMany(Category::class, 'model_category', 'models_id', 'category_id');
    }
}
