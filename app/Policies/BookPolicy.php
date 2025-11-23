<?php

namespace App\Policies;

use App\Models\User;

class BookPolicy
{
    /**
     * Create a new policy instance.
     */

    //Create book
    public function create(User $User)
    {
        return $User->hasAnyRole(['admin', 'staff']);
    }

    //Update book
    public function update(User $User)
    {
        return $User->hasRoleAnyRole('admin');
    }

    //Delete book
    public function delete(User $User)
    {
        return $User->hasRoleAnyRole('admin');
    }

}
