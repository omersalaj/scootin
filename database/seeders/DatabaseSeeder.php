<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Point;
use App\Models\Scooter;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {

        // Create specific user with my email for testun purposes
        User::factory()->create(['email' => 'omersalaj@gmail.com', 'name' => 'Omer Salaj']);
        // Create 3 other users
        User::factory(3)->create();

        // Create 5 scooters and give them starting point
        Scooter::factory(5)->create();
        Scooter::all()->map(function ($item, $key) {
            Point::factory()->set('scooter_id', $item->id)->create();
        });
    }
}
