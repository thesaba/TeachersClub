<?php

namespace App\Events;

use Illuminate\Http\Request;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userId;
    public $request;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($userId, Request $request)
    {
        $this->userId = $userId;
        $this->request = $request;
    }
}
