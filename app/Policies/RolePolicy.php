<?php

namespace App\Policies;

use App\Models\User;

class RolePolicy
{
    /**
     * Create a new policy instance.
     */
    public function allowed(User $user)
    {
        return in_array($user->role, ['admin', 'approver']);
    }

    public function admin(User $user)
    {
        return $user->role === 'admin';
    }
    
    public function approver(User $user)
    {
        return $user->role === 'approver';
    }
}
