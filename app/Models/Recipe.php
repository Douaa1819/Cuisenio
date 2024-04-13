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
        'steps',
        'list_ingredients',
        'level',
        'season'
    ];

    // If you have relationships e.g., with Theme or Ingredient, you might want to define them as well
    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    public function ingredient()
    {
        return $this->belongsTo(Ingrediant::class, 'ingredient_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
}
