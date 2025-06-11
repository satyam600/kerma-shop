<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(Categorie::class);
    }
    public function colour(){
        return $this->belongTo(Colour::class);
    }
    public function size(){
        return $this->belongTo(Size::class);
    }
    public function weartypes(){
        return $this->belongTo(Weartype::class);
    }
    public function sale() {
        return $this->hasMany(Sale::class);
    }
    public function stock(){
        return $this->hasMany(Stock::class);
    }
}
