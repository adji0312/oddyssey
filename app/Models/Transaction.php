<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

<<<<<<< HEAD
    public function games(){
        return $this->hasMany(Game::class);
=======
    public function game(){
        return $this->belongsTo(Game::class);
>>>>>>> ecc676d8f0cd79c9309dc2768d1ccca05f5b80bd
    }
}
