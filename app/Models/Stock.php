<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
// add comment to this file in registation branch
// aaa