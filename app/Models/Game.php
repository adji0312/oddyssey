<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = ['id'] ; 

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function slides(){
        return $this->hasMany(Slide::class);
    }

    public function getCategory(){
        $category = $this->category(); 
        return $category->title ; 
    }
}
