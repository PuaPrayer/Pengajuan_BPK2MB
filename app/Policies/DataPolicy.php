<?php

namespace App\Policies;

use App\Models\Data;
use App\Models\User;

class DataPolicy
{
    /**
     * Create a new policy instance.
     */
    public function data(User $user, Data $data)
    {
        return $user->id === $data->user_id;
    }
}
