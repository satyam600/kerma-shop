<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weartype extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany(Product::class);
    }
}
