<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQQuestion extends Model
{
    protected $fillable = ['category_id', 'question', 'answer'];

    public function category()
    {
        return $this->belongsTo(FAQCategory::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
