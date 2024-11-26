<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class UserCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

	//O gajo qualquer
	private $_user;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user)
    {
        $this->_user = $user;
    }


	public function getUser()
    {
        return ($this->_user);
    }
	
    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
   public function broadcastOn()
   {
	   return [
	   new PrivateChannel('channel-name'),
	   ];
   }
}
