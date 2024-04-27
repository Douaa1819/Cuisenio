<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['name', 'phone', 'email', 'profile_image', 'password'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
  


    public function favoris()
    {
        return $this->hasMany(favoris::class, 'user_id');
    }
}
