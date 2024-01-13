<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqFactory extends Factory
{
    protected $model = Faq::class;

    public function definition()
    {
        return [
            // You can use Faker here if you want to generate dynamic data
            'faq_category_id' => 1, // Placeholder, will be overridden in seeder
            'question' => $this->faker->question,
            'answer' => $this->faker->answer,
        ];
    }
}
