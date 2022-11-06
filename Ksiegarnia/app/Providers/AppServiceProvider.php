<?php

namespace App\Providers;

use  App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Enums\UserRole;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->defineUserRoleGate('isAdmin',UserRole::ADMIN);
        $this->defineUserRoleGate('isUser',UserRole::USER);
    }

    private function defineUserRoleGate(string $name, string $role): void
    {
        Gate::define($name, function(User $user) use ($role){
            return $user->role == $role;
        }); 
    }
}
