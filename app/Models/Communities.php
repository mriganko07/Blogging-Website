<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    //
    use HasFactory;

    protected $table = "communities";
    protected $primaryKey = "community_id";
    protected $fillable = ['user_id', 'community_name', 'community_description', 'community_coverpic', 'community_pic', 'category'];
}
