<?php

return [

    'whoops'              => 'Ops!',
    'hello'               => 'Dobrodošli!',
    'salutation'          => 'S spoštovanjem,<br> : company_name',
    'subcopy'             => 'Če imate težave s klikom na gumb ": besedilo", kopirajte in prilepite spodnji URL v spletni brskalnik: [: url](:url)',
    'reads'               => 'Preberi|Preberi',
    'read_all'            => 'Preberi vse',
    'mark_read'           => 'Označi kot prebrano',
    'mark_read_all'       => 'Označi vse kot prebrano',
    'new_apps'            => 'Nova aplikacija|Novih aplikacij',
    'upcoming_bills'      => 'Prihajajoči računi',
    'recurring_invoices'  => 'Ponavljajoči se računi',
    'recurring_bills'     => 'Ponavljajoči se računi',

    'update' => [

        'mail' => [

            'subject' => '⚠️ Posodobitev neuspešna na :domain',
            'message' => 'Posodobitev :alias iz različice :current_version na :new_version je neuspašna na <strong>:step</strong> koraku z naslednjim sporočilom: :error_message',

        ],

        'slack' => [

            'message' => 'Posodobitev neuspešna na :domain',

        ],

    ],

    'import' => [

        'completed' => [

            'subject'           => 'Uvoz je končan',
            'description'       => 'Uvoz je končan in zapisi so na voljo na nadzorni plošči.',

        ],

        'failed' => [

            'subject'           => 'Uvoz ni uspel',
            'description'       => 'Datoteke ni mogoče uvoziti zaradi težave:',

        ],
    ],

    'export' => [

        'completed' => [

            'subject'           => 'Izvoz je pripravljen',
            'description'       => 'Izvozna datoteka je pripravljena za prenos s povezave:',

        ],

        'failed' => [

            'subject'           => 'Izvoz ni uspel',
            'description'       => 'Izvozne datoteke ni bilo mogoče ustvariti zaradi težave:',

        ],

    ],

    'email' => [

        'invalid' => [

            'title'         => 'Napačen :type Email',
            'description'   => ':email E-poštni naslov je bil prijavljen kot neveljaven in oseba je bila onemogočena. Preverite naslednje sporočilo o napaki in popravite e-poštni naslov:',

        ],

    ],

    'menu' => [

        'export_completed' => [

            'title'         => 'Export je pripravljen',
            'description'   => 'Vaša <strong>:type</strong> exportna datoteka je pripravljena za  <a href=":url" target="_blank"><strong>prenos</strong></a>.',

        ],

        'export_failed' => [

            'title'         => 'Izvoz neuspešen',
            'description'   => 'Izvozne datoteke ni mogoče ustvariti zaradi več težav. Preverite svojo e-pošto za podrobnosti.',

        ],

        'import_completed' => [

            'title'         => 'Uvoz zaključen',
            'description'   => 'Vaši <strong>:type</strong> lined <strong>:count</strong> podatki so bili uspešno uvoženi.',

        ],

        'import_failed' => [

            'subject'       => 'Uvoz neuspešen',
            'description'   => 'Datoteke ni mogoče uvoziti zaradi več težav. Preverite svojo e-pošto za podrobnosti.',

        ],

        'new_apps' => [

            'title'         => 'Nova aplikacija',
            'description'   => '<strong>:name</strong> app is out. You can <a href=":url">click here</a> to see the details.',

        ],

        'invoice_new_customer' => [

            'title'         => 'Nov račun',
            'description'   => '<strong>:invoice_number</strong> invoice is created. You can <a href=":invoice_portal_link">click here</a> to see the details and proceed with the payment.',

        ],

        'invoice_remind_customer' => [

            'title'         => 'Zapadel račun',
            'description'   => '<strong>:invoice_number</strong> invoice was due <strong>:invoice_due_date</strong>. You can <a href=":invoice_portal_link">click here</a> to see the details and proceed with the payment.',

        ],

        'invoice_remind_admin' => [

            'title'         => 'Zapadel račun',
            'description'   => '<strong>:invoice_number</strong> invoice was due <strong>:invoice_due_date</strong>. You can <a href=":invoice_admin_link">click here</a> to see the details.',

        ],

        'invoice_recur_customer' => [

            'title'         => 'Nov ponavljajoči račun',
            'description'   => '<strong>:invoice_number</strong> invoice is created based on your recurring circle. You can <a href=":invoice_portal_link">click here</a> to see the details and proceed with the payment.',

        ],

        'invoice_recur_admin' => [

            'title'         => 'Nov ponavljajoči račun',
            'description'   => '<strong>:invoice_number</strong> invoice is created based on <strong>:customer_name</strong> recurring circle. You can <a href=":invoice_admin_link">click here</a> to see the details.',

        ],

        'invoice_view_admin' => [

            'title'         => 'Račun viden',
            'description'   => '<strong>:customer_name</strong> has viewed the <strong>:invoice_number</strong> invoice. You can <a href=":invoice_admin_link">click here</a> to see the details.',

        ],

        'revenue_new_customer' => [

            'title'         => 'Plačilo prejeto',
            'description'   => 'Thank you for the payment for <strong>:invoice_number</strong> invoice. You can <a href=":invoice_portal_link">click here</a> to see the details.',

        ],

        'invoice_payment_customer' => [

            'title'         => 'Plačilo prejeto',
            'description'   => 'Thank you for the payment for <strong>:invoice_number</strong> invoice. You can <a href=":invoice_portal_link">click here</a> to see the details.',

        ],

        'invoice_payment_admin' => [

            'title'         => 'Plačilo prejeto',
            'description'   => ':customer_name recorded payment for <strong>:invoice_number</strong> invoice. You can <a href=":invoice_admin_link">click here</a> to see the details.',

        ],

        'bill_remind_admin' => [

            'title'         => 'Zapadel račun',
            'description'   => '<strong>:bill_number</strong> bill was due <strong>:bill_due_date</strong>. You can <a href=":bill_admin_link">click here</a> to see the details.',

        ],

        'bill_recur_admin' => [

            'title'         => 'Nov ponavljajoči račun',
            'description'   => '<strong>:bill_number</strong> bill is created based on <strong>:vendor_name</strong> recurring circle. You can <a href=":bill_admin_link">click here</a> to see the details.',

        ],

        'invalid_email' => [

            'title'         => 'Invalid :type Email',
            'description'   => 'The <strong>:email</strong> email address has been reported as invalid, and the person has been disabled. Please check and fix the email address.',

        ],

    ],

    'messages' => [

        'mark_read'             => ':type je prebral to obvestilo!',
        'mark_read_all'         => ':type je prebral vsa obvestila!',
        'new_app'               => ':type aplikacija objavljena.',
        'export'                => 'Izvozna datoteka <b>:type</b> je na voljo za <a href=":url" target="_blank"><b>prenos</b></a>.',
        'import'                => 'Vaši <b>:type</b> podloženi <b>:count</b> podatki so uspešno uvoženi.',

    ],
];
