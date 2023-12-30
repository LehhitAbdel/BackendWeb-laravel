<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    protected $fillable = ['user_id', 'title', 'cover_image', 'content', 'published_at'];
    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
