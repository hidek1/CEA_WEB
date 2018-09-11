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
          Gate::define('system-only', function ($user) {
            return ($user->category == 1);
          });
          // more than staff
          Gate::define('staff-higher', function ($user) {
            return ($user->category > 0 && $user->category <= 5);
          });
          // more than student
          Gate::define('student-higher', function ($user) {
            return ($user->category > 0 && $user->category <= 10);
          });
    }
}
