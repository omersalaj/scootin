<?php

namespace App\Events;

use App\Models\Scooter;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TripBeganEvent implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /**
     * @var Scooter
     */
    public Scooter $scooter;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Scooter $scooter)
    {
        $this->scooter = $scooter;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel
     */
    public function broadcastOn(): Channel
    {
        return new Channel('start');
    }

    /**
     * Data that is appended upon broadcasting
     *
     * @return array
     * @noinspection PhpUnused
     */
    public function broadcastWith(): array
    {
        return $this->scooter->toArray();
    }
}
