<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['id', 'name'];
    use HasFactory;

    public function models(){
        return $this->hasMany(Models::class, 'brand_id');
    }
}
