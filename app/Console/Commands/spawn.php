<?php

namespace App\Console\Commands;

use App\Enum\PointStatusEnum;
use App\Models\Scooter;
use Exception;
use Illuminate\Console\Command;

class spawn extends Command
{
    private static int $update_frequency = 3;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spawn:clients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Spawn the process.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        // Required php-pcntl to run multiple child processes which by now is not supported by Windows OS
        while (true) {
            echo __('Spawning fake clients in progress ...' . PHP_EOL);
            // Get all scooters in random order
            Scooter::inRandomOrder()->get()->map(function ($item, $key) {

                // Skip this Scooter if already occupied
                if ($item->latestPoint->status === PointStatusEnum::Occupied) {
                    return;
                }
                // Get random travel time
                $travel_time = $this->travelTime();

                // Find out how much travel portions do we have
                for ($i = 0; $i < floor($travel_time / $this::$update_frequency) - 1; $i++) {
                    // Simulate travel start
                    sleep($this::$update_frequency);
                    $item->tripBegan(fake()->latitude(), fake()->longitude());
                }

                // Simulate travel end
                sleep($this::$update_frequency);
                $item->tripEnded(fake()->latitude(), fake()->longitude());

                // Do pause before moving forward
                $this->sleep();
            });

            // Do pause before going throught new set of scooters
            $this->sleep();
        }
    }


    /**
     * @return void
     * @throws Exception
     */
    private function sleep(): void
    {
        sleep($this->sleepTime());
    }

    /**
     * @return int
     * @throws Exception
     */
    private function sleepTime(): int
    {
        return sleep(random_int(2, 5));
    }

    /**
     * @return int
     * @throws Exception
     */
    private function travelTime(): int
    {
        return random_int(10, 15);
    }
}
