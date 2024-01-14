<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\NewsPost;
use App\Models\ContactFormSubmission;




class DatabaseSeeder extends Seeder 
{
    public function run(): void
    {
        FaqCategory::factory()->create(['name' => 'Food']);
        FaqCategory::factory()->create(['name' => 'Drinks']);

        // Retrieve the categories
        $foodCategory = FaqCategory::where('name', 'Food')->first();
        $drinksCategory = FaqCategory::where('name', 'Drinks')->first();

        // Seed FAQs
        if ($foodCategory) {
            Faq::create([
                'faq_category_id' => $foodCategory->id,
                'question' => 'Are there vegetarian dishes?',
                'answer' => 'Yes, there are various salads and fruit dishes.',
            ]);
        }

        if ($drinksCategory) {
            Faq::create([
                'faq_category_id' => $drinksCategory->id,
                'question' => 'Are there non sparkling drinks?',
                'answer' => 'Of course, we have a lot of choices.',
            ]);
        }

        
        
        // random users
        User::factory(2)->create();
        
        // Create a specific admin user
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'is_admin' => true,
        ]);
        
        NewsPost::factory()->create();

    }

}
