<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
          // only developer
          Gate::define('admin', function ($user) {
            return ($user->type <= 1);
          });
          // 
          Gate::define('staff', function ($user) {
            return ($user->type <= 2);
          });
          // camp student
          Gate::define('camp-student', function ($user) {
            return ($user->type <= 3);
          });
          // official student
          Gate::define('official-student', function ($user) {
            return ($user->type == 4 || $user->type <= 2);
          });
    }
}
