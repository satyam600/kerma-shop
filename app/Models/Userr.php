<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    use HasFactory;
    public function admin() {
        return $this->hasMany(Admin::class);
    }
    public function sale() {
        return $this->hasMany(Sale::class);
    }
    public function gender(){
        return $this->belongsTo(Gender::class);
    }
}
