<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['username', 'password', 'email', 'birthday', 'avatar', 'about_me', 'is_admin'];

    public function newsPosts()
    {
        return $this->hasMany(NewsPost::class);
    }

    public function faqQuestions()
    {
        return $this->hasMany(FAQQuestion::class);
    }
}

