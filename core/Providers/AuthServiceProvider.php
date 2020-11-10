<?php

namespace Core\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // ' Core\Models\Model' => ' Core\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Otorga implícitamente todos los permisos a la función "Super administrador"
        // Esto funciona en la aplicación mediante el uso de funciones
        // relacionadas con la puerta como auth()->usuario->can() y @can()
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super') ? true : null;
        });
    }
}
