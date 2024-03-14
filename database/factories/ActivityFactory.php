<?php

namespace Database\Factories;

use App\Models\Commission;
use App\Models\Guest;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'place'=>fake()->city(),
            'commission_id'=> Commission::all()->random(),
            'guest_id'=>Guest::all()->random(),
            'Participant_id'=>Participant::all()->random(),
            'user_id'=>User::all()->random(),
        ];
    }
}
