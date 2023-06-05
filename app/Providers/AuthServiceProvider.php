<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Horizon\Horizon;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Horizon::auth(function ($request) {
            if (env('APP_ENV', 'local') == 'local') {
                return true;
            } else {
                $get_ip = $request->getClientIp();
                $can_ip = env('HORIZON_IP', '127.0.0.1');
                return $can_ip == $get_ip;
            }
        });
    }
}
