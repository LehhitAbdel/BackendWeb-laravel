<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQCategory extends Model
{
    protected $fillable = ['name'];

    public function faqQuestions()
    {
        return $this->hasMany(FAQQuestion::class);
    }
}
