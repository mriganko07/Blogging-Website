<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    //
    use HasFactory;

    protected $table = "communities";
    protected $primarykey = "community_id";
}
