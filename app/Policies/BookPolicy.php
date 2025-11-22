<?php

namespace App\Policies;

use App\Models\User;

class BookPolicy
{
    /**
     * Create a new policy instance.
     */
    public function create(User $User)
    {
        //
        return $User->hasAnyRole(['admin', 'staff']);
    }

    public function update(User $User)
    {
        //
        return $User->hasRoleAnyRole('admin');
    }
}
