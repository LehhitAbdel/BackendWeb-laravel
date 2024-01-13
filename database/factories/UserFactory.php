<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('Password!321'), // default password
            'remember_token' => Str::random(2),
            'birthday' => $this->faker->date(),
            'avatar' => 'avatars/a6BwmiGLkKrCkHY73vvA4wAQO0p6cPHVabBGnr5j.jpg',
            'about_me' => $this->faker->text(),
            'is_admin' => $this->faker->boolean(),
        ];
    }
}


