<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediant extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function image()
{
    return $this->morphOne(Image::class, 'imageable');
}


public function recipes()
{
    return $this->belongsToMany(Recipe::class);  
}
}
