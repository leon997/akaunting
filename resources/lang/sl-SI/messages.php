<?php

return [

    'success' => [
        'added'             => ':type je bil dodan!',
        'updated'           => ':type je bil posodobljen!',
        'deleted'           => ':type je bil izbrisan!',
        'duplicated'        => ':type je bil dupliciran!',
        'imported'          => ':type je bil uvožen!',
        'import_queued'     => 'uvoz :type je bil dodan! Ko bo končano, boste prejeli e-poštno sporočilo.',
        'exported'          => ':type je bil izvožen!',
        'export_queued'     => 'izvoz :type je bil dodan! Ko bo končano, boste prejeli e-poštno sporočilo.',
        'enabled'           => ':type je bil omogočen!',
        'disabled'          => ':type je bil onemogočen!',
        'connected'         => ':type je bil povezan!',
        'invited'           => ':type je bil povabljen!',
        'ended'             => ':type je bil končan!',

        'clear_all'         => 'Super! Izbrisali ste vse svoje :type.',
    ],

    'error' => [
        'over_payment'      => 'Napaka: plačilo ni dodano! Znesek, ki ste ga vnesli, presega skupni znesek: :amount',
        'not_user_company'  => 'Napaka: Nimate dovoljenja za upravljanje tega podjetja!',
        'customer'          => 'Napaka: uporabnik ni ustvarjen! :ime že uporablja ta e-poštni naslov.',
        'no_file'           => 'Napaka: izbrana ni nobena datoteka!',
        'last_category'     => 'Napaka: ni mogoče izbrisati zadnje kategorije :type!',
        'change_type'       => 'Napaka: vrste ni mogoče spremeniti, ker je povezana z :text!',
        'invalid_apikey'    => 'Napaka: Vneseni ključ API je neveljaven!',
        'import_column'     => 'Napaka: :message Ime lista: :sheet. Številka vrstice: :line.',
        'import_sheet'      => 'Napaka: Ime lista ni veljavno. Prosimo, preverite vzorčno datoteko.',
        'same_amount'       => 'Napaka: skupni znesek delitve mora biti popolnoma enak kot :transakcija skupni: :amount',
        'over_match'        => 'Napaka: :type ni povezan! Znesek, ki ste ga vnesli, ne sme preseči skupnega zneska plačila: :amount',
    ],

    'warning' => [
        'deleted'           => 'Opozorilo: Ni vam dovoljeno izbrisati <b>:ime</b>, ker je povezano z :text.',
        'disabled'          => 'Opozorilo: Ni vam dovoljeno onemogočiti <b>:ime</b>, ker je povezano z :text.',
        'reconciled_tran'   => 'Opozorilo: transakcije ne smete spreminjati/brisati, ker je usklajena!',
        'reconciled_doc'    => 'Opozorilo: Ni vam dovoljeno spreminjati/izbrisati :typea, ker ima usklajene transakcije!',
        'disable_code'      => 'Opozorilo: Ni vam dovoljeno onemogočiti ali spremeniti valute <b>:ime</b>, ker je povezana z :text.',
        'payment_cancel'    => 'Opozorilo: Preklicali ste svoje nedavno :method plačila!',
        'missing_transfer'  => 'Opozorilo: nakazilo, povezano s to transakcijo, manjka. Razmislite o brisanju te transakcije.',
    ],

];
