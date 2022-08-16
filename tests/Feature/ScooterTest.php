<?php

namespace Tests\Feature;

use App\Enum\PointStatusEnum;
use App\Models\Point;
use App\Models\Scooter;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScooterTest extends TestCase
{
    use RefreshDatabase;


    /**
     * Check if sample scooter is within given area.
     *
     * @return void
     * @test
     */
    public function is_scooter_in_area(): void
    {

        // Populate database and simulate 1 second time pass
        $this->seed();
        sleep(1);

        // Create new Occupied point for Scooter with ID 1
        Point::factory()->create([
            'lat' => 42.212293,
            'lng' => 20.734354,
            'scooter_id' => 1,
            'status' => PointStatusEnum::Occupied
        ]);

        // Create 2 points which creates the square inside where the scooter is occupied
        $north_west = Point::createPoint(42.252641, 20.666777);
        $south_east = Point::createPoint(42.174786, 20.795571);

        // Check the occupation status
        $result = Scooter::isInArea($north_west, $south_east, PointStatusEnum::Occupied);

        $this->assertNotEmpty($result);
    }
}
