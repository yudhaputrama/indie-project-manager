<?php

namespace App\Policies;

use App\Project;
use App\User;
use App\Photo;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotoPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param $ability
     * @return bool
     */
    public function before(User $user, $ability){
        if ($user->hasRole('admin')){
            return true;
        }
    }

    /**
     * Determine whether the user can view the photo.
     *
     * @param  \App\User  $user
     * @param  \App\Photo  $photo
     * @return mixed
     */
    public function view(User $user, Photo $photo)
    {
        return !$photo->project->members->where('id',$user->id)->isEmpty();
    }

    /**
     * Determine whether the user can create photos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasRole('staff')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the photo.
     *
     * @param  \App\User  $user
     * @param  \App\Photo  $photo
     * @return mixed
     */
    public function update(User $user, Photo $photo)
    {
        if ($user->hasRole('staff') && !$photo->project->members->where('id',$user->id)->isEmpty()){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the photo.
     *
     * @param  \App\User  $user
     * @param  \App\Photo  $photo
     * @return mixed
     */
    public function delete(User $user, Photo $photo)
    {
        if ($user->hasRole(['admin','staff'])){
            return true;
        }
        return false;
    }
}