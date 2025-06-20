<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Userr extends Authenticatable
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
