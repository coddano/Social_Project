<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-users', function($user){
            
            return $user->hasAnyRole(['admin', 'user']);
        });

        //droit d'editer si c'est un admin 

        Gate::define('edit-users', function ($user) {
            return $user->hasAnyRole(['admin', 'user']);
        });


        //droit de supprimer si c'est un admin


        Gate::define('delete-users', function ($user) {
            return $user->isAdmin();
        });
    }
}
