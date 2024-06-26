<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function image()
{
    return $this->morphOne(Image::class, 'imageable');
}

public function recipes()
{
    return $this->hasMany(Recipe::class); 
}

}

