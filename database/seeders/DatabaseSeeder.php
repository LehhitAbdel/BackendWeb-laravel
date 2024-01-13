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
        // random users
        User::factory(2)->create();

        // Create a specific admin user
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'is_admin' => true,
        ]);

    }

}
