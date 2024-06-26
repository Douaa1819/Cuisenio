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
        'user_id',
        'duration_preparation',
        'steps',
        'number_of_persons',
        'list_ingredients',
        'level',
        'season'
    ];
    

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ingredients() {
        return $this->belongsToMany(Ingrediant::class, 'ingrediant_recipe', 'recipe_id', 'ingrediant_id');
    }
    
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function favoris()
    {
        return $this->hasMany(favoris::class, 'recipe_id');
    }   
    
    
    public function reviews()
    {
        return $this->hasMany(favoris::class,'recipe_id');
    }
    
}
