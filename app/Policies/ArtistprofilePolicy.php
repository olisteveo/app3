<?php

namespace App\Policies;

use App\Models\Artistprofile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtistprofilePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function become(User $user)
    {
        return $user->roles_id == Role::USER_ROLE;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function edit(User $user)
    {
        return $user->roles_id == Role::ARTIST_ROLE;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Artistprofile $artist)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Artistprofile $artist)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Artistprofile $artist)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Artistprofile $artist)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Artistprofile $artist)
    {
        //
    }
}
