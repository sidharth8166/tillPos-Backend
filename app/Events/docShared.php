<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class docShared extends Event implements ShouldBroadcast
{
    use SerializesModels;


    /**
     * Only (!) Public members will be serialized to JSON and sent to Pusher
     **/
    public $doctor_file;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($doctor_file)
    {
        $this->$doctor_file = $doctor_file;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['share-channel'];
    }
}
