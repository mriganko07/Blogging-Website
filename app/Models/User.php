<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
     protected $table = "users";
     protected $primaryKey = "user_id" ;
     protected $fillable = 
     [
        'email', 
        'name', 
        'user_name', 
        'phone', 'dob', 
        'profile_picture', 
        'cover_picture',
     ];
}
