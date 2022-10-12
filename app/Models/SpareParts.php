<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpareParts extends Model
{
    protected $fillable = ['id','name'];
    use HasFactory;

    public function category(){
        return $this->belongsTo(related:Category::class);
    }

    public function manufacturer(){
        return $this->belongsTo(related:Manufacturer::class);
    }
}
