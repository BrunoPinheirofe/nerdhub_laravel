<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Profile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // A senha padrão para todos
            'remember_token' => Str::random(10),
        ];
    }
     public function configure(): static
    {
        return $this->afterCreating(function (\App\Models\User $user) {
            // Cria um Profile associado a este user
            Profile::factory()->create(['user_id' => $user->id]);
        });
    }
}
