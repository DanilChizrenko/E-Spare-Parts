<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id','name','model_id'];
    use HasFactory;

    public function spareparts(){
        return $this->HasMany(SparePart::class);
    }

    public function models(){
        return $this->belongsToMany(Models::class, 'model_category', 'category_id', 'model_id');
    }
}
