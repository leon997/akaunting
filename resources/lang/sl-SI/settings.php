<?php

return [

    'company' => [
        'description'                => 'Spremeni podatke podjetja',
        'name'                       => 'Ime',
        'email'                      => 'Elektronski naslov',
        'phone'                      => 'Telefonska številka',
        'address'                    => 'Naslov',
        'edit_your_business_address' => 'Uredi naslov podjetja',
        'logo'                       => 'Logotip',

        'form_description' => [
            'general'                   => 'Te informacije so vidne v zapisih, ki jih ustvarite.',
            'address'                   => 'Naslov bo uporabljen v izdanih računih, prejetih računih in drugih evidencah, ki jih izdate.',
        ],
    ],

    'localisation' => [
        'description'       => 'Nastavite proračunsko leto, časovni pas, obliko datuma in ostale nastavitve',
        'financial_start'   => 'Začetek finančnega leta',
        'timezone'          => 'Časovni pas',
        'financial_denote' => [
            'title'         => 'Označitev proračunskega leta',
            'begins'        => 'Leto, v katerem se začne',
            'ends'          => 'Leto, v katerem se konča',
        ],
        'preferred_date'    => 'Oblika datuma',
        'date' => [
            'format'        => 'Zapis datuma',
            'separator'     => 'Besedilno ločilo za datum',
            'dash'          => 'Pomišljaj (-)',
            'dot'           => 'Pika (.)',
            'comma'         => 'Vejica (,)',
            'slash'         => 'Desna poševnica (/)',
            'space'         => 'Presledek ( )',
        ],
        'percent' => [
            'title'         => 'Odstotek (%) Pozicija',
            'before'        => 'Pred številko',
            'after'         => 'Za številko',
        ],
        'discount_location' => [
            'name'          => 'Lokacija popusta',
            'item'          => 'V vrstici',
            'total'         => 'Skupaj',
            'both'          => 'V vrstici in skupaj',
        ],
        'form_description' => [
            'fiscal'                    => 'Nastavite obdobje poslovnega leta, ki ga vaše podjetje uporablja za obdavčenje in poročanje.',
            'date'                      => 'Izberite obliko datuma, ki jo želite videti v vmesniku.',
            'other'                     => 'Izberite, kje je prikazan znak za odstotek za davke. Omogočite lahko popuste na vrstične postavke in na vsoto za izdane in prejete račune.',
        ],
    ],

    'invoice' => [
        'description'       => 'Prilagodi račun',
        'prefix'            => 'Predpona za številko',
        'digit'             => 'Številskih mest',
        'next'              => 'Naslednja številka',
        'logo'              => 'Logotip',
        'custom'            => 'Po meri',
        'item_name'         => 'Ime Artikla',
        'item'              => 'Artikli',
        'product'           => 'Izdelki',
        'service'           => 'Storitve',
        'price_name'        => 'Naziv cene',
        'price'             => 'Cena',
        'rate'              => 'Tarifa',
        'quantity_name'     => 'Ime količine',
        'quantity'          => 'Količina',
        'payment_terms'     => 'Plačilni pogoji',
        'title'             => 'Naslov',
        'subheading'        => 'Podnaslov',
        'due_receipt'       => 'Za plačilo do izdaje računa',
        'due_days'          => 'Za plačilo v :days dneh',
        'choose_template'   => 'Izberi predlogo računa',
        'default'           => 'Privzeto',
        'classic'           => 'Klasično',
        'modern'            => 'Sodobno',
        'column'            => 'Stolpec|Stolpci',
        'hide'              => [
            'item_name'         => 'Skrij ime',
            'item_description'  => 'Skrij opis',
            'quantity'          => 'Skrij količino',
            'price'             => 'Skrij ceno',
            'amount'            => 'Skrij znesek',
        ],
        'form_description' => [
            'general'                   => 'Nastavite privzete nastavitve za oblikovanje številk računov in plačilnih pogojev.',
            'template'                  => 'Izberite eno od spodnjih predlog za svoje izdane račune.',
            'default'                   => 'Če določite privzete nastavitve za račune, bodo z njimi vnaprej izpolnjeni naslovi, podnaslovi, opombe in noge. Tako vam ni treba vsakič znova urejati računov.',
            'column'                    => 'Prilagodite poimenovanje stolpcev računa. Če želite skriti opise artiklov in zneske v vrsticah, lahko to spremenite tukaj.',
        ]
    ],

    'transfer' => [
        'choose_template'   => 'Izberi predlogo za prenos',
        'second'            => 'Drugi',
        'third'             => 'Tretji',
    ],

    'default' => [
        'description'       => 'Privzeti račun, valuta in jezik podjetja',
        'list_limit'        => 'Rezultatov na stran',
        'use_gravatar'      => 'Uporabi Gravatar',
        'income_category'   => 'Kategorija prihodkov',
        'expense_category'  => 'Stroški po kategorijah',
        'form_description' => [
            'general'                   => 'Izberite privzeti račun, davek in način plačila za hitro ustvarjanje zapisov. Nadzorna plošča in poročila so prikazani pod privzeto valuto.',
            'category'                  => 'Izberite privzete kategorije, da pospešite ustvarjanje zapisa.',
            'other'                     => 'Prilagodite privzete nastavitve jezika podjetja in delovanje označevanja strani.',
        ],
    ],

    'email' => [
        'description'       => 'Spremeni protokol za pošiljanje in predloge elektronskih pošt',
        'protocol'          => 'Protokol',
        'php'               => 'PHP pošta',
        'email_service'                 => 'E-poštna storitev',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP gostitelj',
            'port'          => 'SMTP vrata',
            'username'      => 'SMTP Uporabniško ime',
            'password'      => 'SMTP Geslo',
            'encryption'    => 'SMTP varnostni model',
            'none'          => 'Brez',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Pot za Sendmail',
        'log'               => 'Dnevnik elektronske pošte',
        'form_description' => [
            'general'                   => 'Pošiljajte redna e-poštna sporočila svoji ekipi in stikom. Nastavite lahko nastavitve protokola in SMTP.',
        ],

        'templates' => [
            'subject'                   => 'Zadeva',
            'body'                      => 'Telo',
            'tags'                      => '<strong>Razpoložljive oznake:</strong> :tag_list',
            'invoice_new_customer'      => 'Nova predloga računa (poslana stranki)',
            'invoice_remind_customer'   => '
Predloga za opomnik računa (poslana stranki)',
            'invoice_remind_admin'      => '
Predloga za opomnik računa (poslana skrbniku)',
            'invoice_recur_customer'    => '
Predloga za ponavljajoče se račune (poslana stranki)',
            'invoice_recur_admin'       => '
Predloga za ponavljajoče se račune (poslana skrbniku)',
            'invoice_payment_customer'  => '
Predloga za prejeto plačilo (poslano stranki)',
            'invoice_payment_admin'     => '
Predloga za prejeto plačilo (poslano skrbniku)',
            'bill_remind_admin'         => '
Predloga za opomin za račun (poslano skrbniku)',
            'bill_recur_admin'          => '
Predloga za ponavljajoče se račune (poslana skrbniku)',
            'revenue_new_customer'      => 'Predloga za prejem prihodka (poslana stranki)',
        ],
    ],

    'scheduling' => [
        'name'              => 'Načrtovanje',
        'description'       => '
Samodejni opomniki in ukazi za ponavljajoče se',
        'send_invoice'      => 'Pošlji opomnik za plačilo računa',
        'invoice_days'      => 'Pošlji po dnevu zapadlosti',
        'send_bill'         => 'Pošlji opomnik za plačilo računa',
        'bill_days'         => 'Pošlji pred zapadlim dnem',
        'cron_command'      => 'Cron ukaz',
        'schedule_time'     => 'Čas zagona',
        'form_description' => [
            'invoice'                   => 'Omogočite ali onemogočite ter nastavite opomnike za svoje račune, ko zapadejo.',
            'bill'                      => 'Omogočite ali onemogočite ter nastavite opomnike za račune, preden zapadejo.',
            'cron'                      => 'Kopirajte ukaz cron, ki bi ga moral izvajati vaš strežnik. Nastavite čas za sprožitev dogodka.',
        ]
    ],

    'categories' => [
        'description'       => 'Neomejene kategorije za dohodke, odhodke in postavke',
    ],

    'currencies' => [
        'description'       => 'Ustvarite in upravljajte valute ter nastavite njihove tečaje',
    ],

    'taxes' => [
        'description'       => 'Fiksne, običajne, vključujoče in sestavljene davčne stopnje',
    ],

];
