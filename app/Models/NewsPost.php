<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Correct namespace for HasFactory


class NewsPost extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'cover_image', 'content', 'published_at'];
    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
