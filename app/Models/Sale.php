<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public function userr(){
        return $this->belongsTo(Userr::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function discount(){
        return $this->belongsTo(Discount::class);
    }
    
}
