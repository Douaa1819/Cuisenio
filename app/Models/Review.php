<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

 protected $fillable=['user_id','recipe_id','nbr_stars'];
 
    public function recipe()
    {
        return $this->belongsTo(Recipe::class,'recipe_id');
    }
}
