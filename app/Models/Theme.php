<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function images()
{
    return $this->morphMany(Image::class, 'imageable');
}

}

