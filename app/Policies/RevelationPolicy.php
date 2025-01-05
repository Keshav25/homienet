<?php

namespace App\Policies;

use App\Models\Revelation;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RevelationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Revelation $revelation): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Revelation $revelation): bool
    {
        return $revelation->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Revelation $revelation): bool
    {
        return $this->update($user, $revelation);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Revelation $revelation): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Revelation $revelation): bool
    {
        return false;
    }
}
