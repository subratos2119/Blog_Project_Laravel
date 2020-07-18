<?php

namespace App\Policies;

use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Model\user\admin  $user
     * @return mixed
     */
    public function viewAny(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Model\user\admin  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        foreach ($user->roles as $role){
            foreach ($role->permissions as $permission){
                if ($permission->id == 3) {
                    return true;
                    }
                }
            }
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function delete(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function restore(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function forceDelete(admin $user)
    {
        //
    }
}
