<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model
{
    protected $fillable = ['id','name'];
    use HasFactory;

    public function spareparts(){
        return $this->HasMany(related:SpareParts::class);
    }
}
