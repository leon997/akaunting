<?php

return [

    'auth'                  => 'Avtentikacija',
    'profile'               => 'Moj profil',
    'edit_profile'          => 'profil',
    'logout'                => 'Odjava',
    'login'                 => 'Prijava',
    'forgot'                => 'Pozabljeno',
    'login_to'              => 'Prijavite se',
    'remember_me'           => 'Zapomni si me',
    'forgot_password'       => 'Pozabil sem svoje geslo',
    'reset_password'        => 'Ponastavi geslo',
    'change_password'       => 'Spremeni geslo',
    'enter_email'           => 'Vnesite svoj e-poštni naslov',
    'current_email'         => 'Trenutni elektronski naslov',
    'reset'                 => 'Ponastavi',
    'never'                 => 'nikoli',
    'landing_page'          => 'Ciljna stran',
    'personal_information'  => 'Osebni podatki',
    'register_user'         => 'Registracija uporabnika',
    'register_user_tekst'   => 'Določite geslo računa',
    'register'              => 'Registracija',
    'sign_up'               => 'Postanite uporabnik',
    'sign_up_to'            => 'Ustvarite nov račun',

    'form_description' => [
        'personal'          => 'Povezava s povabilom bo poslana novemu uporabniku, zato se prepričajte, da je e-poštni naslov pravilen. Prejemnik bo lahko sam vnesel svoje poljubno geslo.',
        'assign'            => 'Uporabnik bo imel dostop do izbranih podjetij. Dovoljenja lahko omejite iz <<a href=":url" class="border-b border-black">roles</a> page.',
        'preferences'       => 'Izberite privzeti jezik uporabnika. Ciljno stran lahko nastavite tudi po prijavi uporabnika.',
    ],

    'password' => [
        'pass'              => 'Geslo',
        'pass_confirm'      => 'Potrditev gesla',
        'current'           => 'Geslo',
        'current_confirm'   => 'Potrditev gesla',
        'new'               => 'Novo geslo',
        'new_confirm'       => 'Potrditev novega gesla',
    ],

    'error' => [
        'self_delete'       => 'Napaka: Ni morete izbrisati samega sebe!',
        'self_disable'      => 'Napaka: Ni morete onemogočiti samega sebe!',
        'unassigned'        => 'Napaka: ni mogoče! Podjetju :company mora biti dodeljen vsaj en uporabnik.        ',
        'no_company'        => 'Napaka: Vašemu računu ni bilo dodeljeno nobeno podjetje. Prosimo, obrnite na skrbnika sistema.',
    ],

    'login_redirect'        => 'Preverjanje opravljeno! Preusmerjeni ste ...',
    'failed'                => 'Podatki ne ustrezajo.',
    'throttle'              => 'Preveč poskusov prijave. Poskusite znova čez: sekund sekund.',
    'disabled'              => 'Ta račun je bil onemogočen. Kontaktirajte administratorja.',

    'notification' => [
        'message_1'         => 'To sporočilo ste prejeli, ker ste poslali zahtevo za ponastavitev gesla.',
        'message_2'         => 'Če zahteva ni bila poslana z vaše strani tega sporočila ne upoštevajte.',
        'button'            => 'Ponastavitev gesla',
    ],

    'invitation' => [
        'subject'           => 'SpletniRačunovodja - Vabilo na portal za stranke',
        'message_1'         => 'To e-pošto ste prejeli, ker vas je naš uporabnik povabil, da se pridružite portalu za stranke na naši aplikaciji SpletniRačunovodja.',
        'message_2'         => 'Če se ne želite pridružiti, preprosto ignorirajte sporočilo.',
        'button'            => 'Pridruži se',
    ],

    'information' => [
        'invoice'           => 'Enostavno ustvarite račune',
        'reports'           => 'Pridobite podrobna poročila',
        'expense'           => 'Spremljajte kakršne koli stroške',
        'customize'         => 'Prilagodite svoj Akaunting',
    ],

    'roles' => [
        'admin' => [
            'name'          => 'Skrbnik',
            'description'   => 'Dobijo popoln dostop do vašega računa, vključno s strankami, računi, poročili, nastavitvami in aplikacijami.',
        ],
        'manager' => [
            'name'          => 'Upravitelj',
            'description'   => 'Dobijo popoln dostop do vašega Akauntinga, vendar ne morejo upravljati uporabnikov in aplikacij.',
        ],
        'customer' => [
            'name'          => 'Stranka',
            'description'   => 'Lahko dostopajo do portala za stranke in plačujejo svoje račune prek spleta s plačilnimi metodami, ki jih nastavite.',
        ],
        'accountant' => [
            'name'          => 'Računovodstvo',
            'description'   => 'Dostopajo lahko do računov, transakcij, poročil in ustvarjajo temeljnice.',
        ],
        'employee' => [
            'name'          => 'Zaposleni',
            'description'   => 'Ustvarijo lahko zahtevke za stroške in spremljajo čas za dodeljene projekte, vendar lahko vidijo samo svoje podatke.',
        ],
    ],

    'invitation' => [
        'message_1'         => 'To e-pošto ste prejeli, ker ste vabljeni, da se pridružite Akauntingu.',
        'message_2'         => 'Če se ne želite pridružiti, vam ni treba storiti ničesar več.',
        'button'            => 'Začnite',
    ],

    'information' => [
        'invoice'           => 'Učinkovito in preprosto vodenje poslovanja',
        'reports'           => 'Enostavno ustvarjanje računov',
        'expense'           => 'Pridobite podrobna poročila o svojem poslovanju',
        'customize'         => 'Preuredite svoj Akaunting po meri',
    ],

    'roles' => [
        'admin' => [
            'name'          => 'Admin',
            'description'   => 'Dobijo popoln dostop do Akauntinga, vključno s strankami, računi, poročili, nastavitvami in aplikacijami.',
        ],
        'manager' => [
            'name'          => 'Manager',
            'description'   => 'Dobijo popoln dostop do Akauntinga, vendar ne morejo upravljati uporabnikov in aplikacij.',
        ],
        'customer' => [
            'name'          => 'Stranka',
            'description'   => 'Lahko dostopajo do portala za stranke in plačujejo svoje račune prek spleta s plačilnimi metodami, ki jih nastavite.',
        ],
        'accountant' => [
            'name'          => 'Računovodja',
            'description'   => 'Dostopajo lahko do računov, transakcij, poročil in ustvarjajo temeljnice.',
        ],
        'employee' => [
            'name'          => 'Zaposleni',
            'description'   => 'Ustvarijo lahko zahtevke za stroške in spremljajo čas za dodeljene projekte, vendar lahko vidijo samo svoje podatke.',
        ],
    ],

];
