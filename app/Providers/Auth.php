<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as Provider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;


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
                ->greeting('Pozdravljeni,')
                ->subject('Potrdite svoj e-poštni naslov')
                ->line('Kliknite na spodnji gumb, da potrdite svoj e-poštni naslov in dokončate registracijo vašega uporabniškega računa.')
                ->action('Potrdi', $url);
        });

        VerifyEmail::createUrlUsing(function ($notifiable)
        {
            return URL::temporarySignedRoute(
                'verification.verify',
                Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
                [
                    'company_id' => $notifiable->getCompanyKey(),
                    'id' => $notifiable->getKey(),
                    'hash' => sha1($notifiable->getEmailForVerification()),
                ]
                );
        });
    }
}
