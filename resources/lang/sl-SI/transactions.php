<?php

return [

    'payment_received'      => 'Plačilo prejeto',
    'payment_made'          => 'Plačilo opravljeno',
    'paid_by'               => 'Plačala oseba',
    'paid_to'               => 'Plačano osebi',
    'related_invoice'       => 'Povezani izdani računi',
    'related_bill'          => 'Povezani prejeti računi',
    'recurring_income'      => 'Ponavljajoči prihodki',
    'recurring_expense'     => 'Ponavljajoči stroški',

    'form_description' => [
        'general'           => 'Tukaj lahko vnesete splošne informacije o transakciji.',
        'assign_income'     => 'Izberite kategorijo in stranko, da bodo vaša poročila podrobnejša.',
        'assign_expense'    => 'Izberite kategorijo in stranko, da bodo vaša poročila podrobnejša.',
        'other'             => 'Vnesite številko in sklic, da bo transakcija povezana z vašimi evidencami.',
    ],

    'slider' => [
        'create'            => ':user je opravil to transakcijo dne :date',
        'attachments'       => 'Prenesite datoteke priložene tej transakciji',
        'create_recurring'  => ':user je ustvaril to ponavljajočo predlogo dne :date',
        'schedule'          => 'Ponovi vsakih :interval :frequency od dne :date',
        'children'          => ':count transakcij je bilo avtomatsko izvedenih',
        'transfer_headline' => '<div> <span class="font-bold"> Pošiljatelj: </span> :from_account </div> <div> <span class="font-bold"> Prejemnik: </span> :to_account </div>',
        'transfer_desc'     => 'Prenos ustvarjen dne :date.',
    ],

    'share' => [
        'income' => [
            'show_link'     => 'Vaša stranka si lahko transakcijo ogleda na tej povezavi',
            'copy_link'     => 'Kopirajte povezavo in jo delite s strankami.',
        ],

        'expense' => [
            'show_link'     => 'Vaš ponudnik si lahko transakcijo ogleda na tej povezavi',
            'copy_link'     => 'Kopirajte povezavo in jo delite s ponudnikom.',
        ],
    ],

    'sticky' => [
        'description'       => 'Predogled, kako bo vaša stranka videla spletno različico vašega plačila.',
    ],

];
