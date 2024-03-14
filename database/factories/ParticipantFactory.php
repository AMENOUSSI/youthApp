<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'=>fake()->name(),
            'last_name'=>fake()->name(),
            'email'=>fake()->name(),
            'cellule'=>fake()->name(),
            'phone'=>fake()->phoneNumber(),
            'total_amount'=>fake()->numberBetween(10000,15000),
            'paid_amount'=>fake()->numberBetween(500,15000),
            'leaving_date'=>fake()->dateTime()
            
        ];
    }
}
