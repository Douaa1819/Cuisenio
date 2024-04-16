<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'theme_id',
        'ingredient_id',
        'duration_preparation',
        'steps',
        'list_ingredients',
        'level',
        'season'
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    public function ingredients() {
        return $this->belongsToMany(Ingrediant::class);
    }
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
}
