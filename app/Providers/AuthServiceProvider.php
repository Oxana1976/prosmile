<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::define(Role::CHIEF, function(User $user){
            
            return $user->role->role === Role::CHIEF;
            
        });

        Gate::define(Role::SECRETARY, function(User $user){
            return $user->role->role === Role::SECRETARY;
        });

        Gate::define(Role::MEDIC, function(User $user){
            return $user->role->role === Role::MEDIC;
        });

        Gate::define(Role::PATIENT, function(User $user){
            return $user->role->role === Role::PATIENT;
        });
    }
}
