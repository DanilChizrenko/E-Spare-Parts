<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $fillable = ['id','name'];
    use HasFactory;

    public function models(){
        return $this->HasMany(related:Models::class);
    }
}