<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $table = "users";
    protected $primaryKey = "user_id";
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'email',
        'name',
        'user_name',
        'phone',
        'dob',
        'profile_picture',
        'cover_picture',
        'password', 
    ];
}