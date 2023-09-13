<?php

namespace Database\Factories;

use App\Global\GlobalValue;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            GlobalValue::USER_NAME => fake()->name(),
            GlobalValue::USER_EMAIL => fake()->unique()->safeEmail(),
            GlobalValue::USER_EMAIL_VERIFICATE_AT => now(),
            GlobalValue::USER_PASSWORD => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            GlobalValue::USER_ADDRESS => "Carrera 7 #15 N 59",
            GlobalValue::USER_PHONE => "3104567890",
            GlobalValue::USER_ROL => 1,
            GlobalValue::USER_VALIDATE => true
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            GlobalValue::USER_EMAIL_VERIFICATE_AT => null,
        ]);
    }
}
