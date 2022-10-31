<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    protected $fillable = ['id','name','category_id','manufacturer_id'];
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }
}
