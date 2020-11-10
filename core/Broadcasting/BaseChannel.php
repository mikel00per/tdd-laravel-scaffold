<?php

namespace Core\Broadcasting;

use Core\Models\User;

class BaseChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \Core\Models\User  $user
     * @return array|bool
     */
    public function join(User $user)
    {
        //
    }
}
