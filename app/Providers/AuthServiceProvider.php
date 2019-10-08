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

        // 歯科医のみ許可
        Gate::define('dentist', function ($company) {
            return ($company->type == \App\Models\Company::TYPE_DENTIST);
        });

        // 技工士のみ許可
        Gate::define('dental-engineer', function ($company) {
            return ($company->type == \App\Models\Company::TYPE_DENTAL_ENGINEER);
        });
    }
}
