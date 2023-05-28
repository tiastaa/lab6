<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Lot;
use App\Models\Bet;
use App\Policies\LotPolicy;
use App\Policies\BetPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Bet::class=>BetPolicy::class,
        Lot::class=>LotPolicy::class,
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
