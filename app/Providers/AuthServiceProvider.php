<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Gate::define('create-secretary', function(User $user){
            $isRole = $user->query()
            ->whereHas('roles', function($query){
                $query->where('role', 'admin');
            });
        });
    }
}
