<?php

return [

    'success' => [
        'added'             => ':type dodan! | :type dodana!',
        'updated'           => ':type posodobljen!',
        'deleted'           => ':type izbrisan!',
        'duplicated'        => ':type podvojen!',
        'imported'          => ':type uvožen!',
        'import_queued'     => ':type uvoz je predviden! Ko bo končan, boste prejeli e-poštno sporočilo.',
        'exported'          => ':type izvožen!',
        'export_queued'     => ':type načrtovan je izvoz trenutne strani! Ko bo pripravljeno za prenos, boste prejeli e-poštno sporočilo.',
        'enabled'           => ':type omogočen!',
        'disabled'          => ':type onemogočen!',
        'connected'         => ':type Povezan!',
        'invited'           => ':type povabljen!',
        'ended'             => ':type Končan',

        'clear_all'         => 'Super! Počistili ste vsa svoja :type.',
    ],

    'error' => [
        'over_payment'      => 'Napaka: Plačilo ni bilo dodano! Vnešena vrednost presega vsoto: :amount',
        'not_user_company'  => 'Napaka: Ne morete upravljati tega podjetja!',
        'customer'          => 'Napaka: Uporabnik ni bil ustvarjen! :name že uporablja ta e-poštni naslov.',
        'no_file'           => 'Napaka: Nobena datoteka ni izbrana!',
        'last_category'     => 'Napaka: Ne morem izbrisati zadnje :type kategorije!',
        'transfer_category' => 'Napaka: Ni mogoče izbrisati transferne <b>:type</b> kategorije!',
        'change_type'       => 'Napaka: vrste ni mogoče spremeniti, ker je povezana s :text!',
        'invalid_apikey'    => 'Napaka: API ključ, ki ste ga vnesli ni veljaven!',
        'import_column'     => 'Napaka: :sporočilo Ime lista: :sheet. Številka vrstice: :line.',
        'import_sheet'      => 'Napaka: Ime lista ni veljaven. Prosimo preverite vzorčno datoteko.',
        'same_amount'       => 'Error: The total amount of split must be exactly the same as the :transaction total: :amount',
        'over_match'        => 'Error: :type not connected! The amount you entered can not exceed the payment total: :amount',
    ],

    'warning' => [
        'deleted'           => 'Opozorilo: Nimate dovoljenja za izbris <b>:name</b>, ker ima povezavo s :text.',
        'disabled'          => 'Opozorilo: Nimate dovoljenja za onemogočanje <b>: ime</b> , ker ima: besedilo, povezano.',
        'reconciled_tran'   => 'Opozorilo: Transakcije ni dovoljeno spreminjati / brisati, ker je potrjena!',
        'reconciled_doc'    => 'Opozorilo: Ne smete spreminjati / brisati :type, ker ima potrjene transakcije!',
        'disable_code'      => 'Opozorilo: Nimate dovoljenja za onemogočanje ali spreminjanje valute <b>:name</b>, ker ima povezavo s :text.',
        'payment_cancel'    => 'Opozorilo: Preklicali ste nedavno plačilo z :method!',
        'missing_transfer'  => 'Opozorilo: nakazilo, povezano s to transakcijo, manjka. Razmislite o brisanju te transakcije.',

    ],

];
