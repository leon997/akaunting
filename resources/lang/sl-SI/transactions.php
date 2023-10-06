<?php

return [

    'payment_received'      => 'Payment Received',
    'payment_made'          => 'Payment Made',
    'paid_by'               => 'Plačal',
    'paid_to'               => 'Paid To',
    'related_invoice'       => 'Related Invoice',
    'related_bill'          => 'Related Bill',
    'recurring_income'      => 'Recurring Income',
    'recurring_expense'     => 'Recurring Expense',

    'form_description' => [
        'general'           => 'Tukaj lahko vnesete splošne informacije o transakciji.',
        'assign_income'     => 'Izberite kategorijo in stranko, da bodo vaša poročila podrobnejša.',
        'assign_expense'    => 'Izberite kategorijo in stranko, da bodo vaša poročila podrobnejša.',
        'other'             => 'Vnesite številko in sklic, da bo transakcija povezana z vašimi evidencami.',
    ],

    'slider' => [
        'create'            => ':user je ustvaril to transakcijo dne :date',
        'attachments'       => 'Prenesite datoteke, priložene tej transakciji',
        'create_recurring'  => ':user created this recurring template on :date',
        'schedule'          => 'Repeat every :interval :frequency since :date',
        'children'          => ':count transactions were created automatically',
        'transfer_headline' => '<div> <span class="font-bold"> From: </span> :from_account </div> <div> <span class="font-bold"> to: </span> :to_account </div>',
        'transfer_desc'     => 'Transfer created on :date.',
    ],

    'share' => [
        'income' => [
            'show_link'     => 'Your customer can view the transaction at this link',
            'copy_link'     => 'Copy the link and share it with your customer.',
        ],

        'expense' => [
            'show_link'     => 'Your vendor can view the transaction at this link',
            'copy_link'     => 'Copy the link and share it with your vendor.',
        ],
    ],

    'sticky' => [
        'description'       => 'You are previewing how your customer will see the web version of your payment.',
    ],

];
