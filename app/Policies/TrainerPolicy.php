<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Trainer;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrainerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Admin $admin, Trainer $trainer)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Admin $admin, Trainer $trainer)
    {
        return $admin->email === 'superuser@mail.ru';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Admin $admin, Trainer $trainer)
    {
        return $admin->email === 'superuser@mail.ru';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Admin $admin, Trainer $trainer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Admin $admin, Trainer $trainer)
    {
        //
    }
}
