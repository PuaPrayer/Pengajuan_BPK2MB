<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Data;
use App\Models\User;
use App\Policies\DataPolicy;
use App\Policies\RolePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => RolePolicy::class,
        Data::class => DataPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
