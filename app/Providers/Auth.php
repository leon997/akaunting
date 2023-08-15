<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as Provider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class Auth extends Provider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Potrdite svoj e-poštni naslov')
                ->line('Kliknite na spodnji gumb, da potrdite svoj e-poštni naslov.')
                ->action('Potrdi', $url);
        });
    }
}
