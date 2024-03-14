<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Activity;
use App\Models\Commission;
use App\Models\Member;
use App\Models\User;
use App\Models\Guest;
use App\Models\Participant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        Member::factory()
            ->count(20)
            ->create();

        Commission::factory()
            ->count(10)
            
            ->create();
        Participant::factory()
            ->count(50)
            ->create();
        
        Guest::factory()
            ->count(10)
            ->create();
        User::factory()
            ->count(10)
            ->create();
        Activity::factory()
            ->count(5)
            ->create();            
    }
}


