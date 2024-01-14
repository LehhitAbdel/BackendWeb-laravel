<?php

namespace Database\Factories;

use App\Models\NewsPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsPostFactory extends Factory
{
    protected $model = NewsPost::class;

    public function definition()
    {
        return [
            'user_id' => 1, 
            'title' => 'New dish!', 
            'cover_image' => 'news/couscous.jpg', 
            'content' => 'From now on every Friday couscous is available', 
            'published_at' => now(), 
        ];
    }
}
