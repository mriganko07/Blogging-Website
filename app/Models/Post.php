<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;

    protected $table = "posts";
    protected $primarykey = "post_id";
    protected $fillable = [
        'post_caption',
        'post_desc',
        'post_img',
        'user_id',
        'community_id',
        'up_votes',
        'down_votes',
        'comments',
        'share',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }
}
