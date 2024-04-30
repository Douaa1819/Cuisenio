<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
   use HasFactory;

   protected  $fillable = ['user_id', 'description', 'title', 'type'];

   public function user()
   {

      return $this->belongsTo(User::class);
   }
   public function image()
   {
       return $this->morphOne(Image::class, 'imageable');
   }

   public function comments()
   {
       return $this->morphMany(Comment::class, 'commentable');
   }
}
