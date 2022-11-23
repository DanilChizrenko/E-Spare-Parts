<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{

    protected $table = "model_category";
    
    protected $fillable = ['id', 'model_id', 'category_id'];
    use HasFactory;
}
