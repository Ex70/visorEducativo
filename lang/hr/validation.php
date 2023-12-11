<?php

declare(strict_types=1);

return [
    'accepted'             => 'Polje :attribute mora biti prihvaćeno.',
    'accepted_if'          => 'Polje :attribute mora biti prihvaćeno kada je :other jednako :value.',
    'active_url'           => 'Polje :attribute nije ispravan URL.',
    'after'                => 'Polje :attribute mora biti datum nakon :date.',
    'after_or_equal'       => 'Polje :attribute mora biti datum veći ili jednak :date.',
    'alpha'                => 'Polje :attribute smije sadržavati samo slova.',
    'alpha_dash'           => 'Polje :attribute smije sadržavati samo slova, brojeve i crtice.',
    'alpha_num'            => 'Polje :attribute smije sadržavati samo slova i brojeve.',
    'array'                => 'Polje :attribute mora biti niz.',
    'ascii'                => 'Polje :attribute smije sadržavati samo slova, brojeve i simbole veličine jednog bajta.',
    'before'               => 'Polje :attribute mora biti datum prije :date.',
    'before_or_equal'      => 'Polje :attribute mora biti datum manji ili jednak :date.',
    'between'              => [
        'array'   => 'Polje :attribute mora imati između :min - :max stavki.',
        'file'    => 'Polje :attribute mora biti između :min - :max kilobajta.',
        'numeric' => 'Polje :attribute mora biti između :min - :max.',
        'string'  => 'Polje :attribute mora biti između :min - :max znakova.',
    ],
    'boolean'              => 'Polje :attribute mora biti false ili true.',
    'can'                  => 'Polje :attribute sadrži neovlaštenu vrijednost.',
    'confirmed'            => 'Potvrda polja :attribute se ne podudara.',
    'current_password'     => 'Lozinka nije ispravna.',
    'date'                 => 'Polje :attribute nije ispravan datum.',
    'date_equals'          => 'Stavka :attribute mora biti jednaka :date.',
    'date_format'          => 'Polje :attribute ne podudara s formatom :format.',
    'decimal'              => 'Polje :attribute mora sadržavati :decimal decimalnih mjesta.',
    'declined'             => 'Polje :attribute mora biti odbijeno.',
    'declined_if'          => 'Polje :attribute mora biti odbijeno kada je :other jednako :value.',
    'different'            => 'Polja :attribute i :other moraju biti različita.',
    'digits'               => 'Polje :attribute mora sadržavati :digits znamenki.',
    'digits_between'       => 'Polje :attribute mora imati između :min i :max znamenki.',
    'dimensions'           => 'Polje :attribute ima neispravne dimenzije slike.',
    'distinct'             => 'Polje :attribute ima dupliciranu vrijednost.',
    'doesnt_end_with'      => 'Polje :attribute ne smije završavati s jednom od sljedećih vrijednosti: :values.',
    'doesnt_start_with'    => 'Polje :attribute ne smije počinjati s jednom od sljedećih vrijednosti: :values.',
    'email'                => 'Polje :attribute mora biti ispravna e-mail adresa.',
    'ends_with'            => ':Attribute bi trebao završiti s jednim od sljedećih: :values.',
    'enum'                 => 'Odabrano polje :attribute nije ispravno.',
    'exists'               => 'Odabrano polje :attribute nije ispravno.',
    'extensions'           => 'Polje :attribute mora imati jedno od sljedećih proširenja: :values.',
    'file'                 => 'Polje :attribute mora biti datoteka.',
    'filled'               => 'Polje :attribute je obavezno.',
    'gt'                   => [
        'array'   => 'Polje :attribute mora biti veće od :value stavki.',
        'file'    => 'Polje :attribute mora biti veće od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti veće od :value.',
        'string'  => 'Polje :attribute mora biti veće od :value karaktera.',
    ],
    'gte'                  => [
        'array'   => 'Polje :attribute mora imati najmanje :value stavki.',
        'file'    => 'Polje :attribute mora imati najmanje :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti veće ili jednako :value.',
        'string'  => 'Polje :attribute mora biti veće ili jednako :value znakova.',
    ],
    'hex_color'            => 'Polje :attribute mora biti važeća heksadecimalna boja.',
    'image'                => 'Polje :attribute mora biti slika.',
    'in'                   => 'Odabrano polje :attribute nije ispravno.',
    'in_array'             => 'Polje :attribute ne postoji u :other.',
    'integer'              => 'Polje :attribute mora biti broj.',
    'ip'                   => 'Polje :attribute mora biti ispravna IP adresa.',
    'ipv4'                 => 'Polje :attribute mora biti ispravna IPv4 adresa.',
    'ipv6'                 => 'Polje :attribute mora biti ispravna IPv6 adresa.',
    'json'                 => 'Polje :attribute mora biti ispravan JSON string.',
    'lowercase'            => 'Polje :attribute mora sadržavati samo mala slova.',
    'lt'                   => [
        'array'   => 'Polje :attribute mora biti manje od :value stavki.',
        'file'    => 'Polje :attribute mora biti manje od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti manje od :value.',
        'string'  => 'Polje :attribute mora biti manje od :value znakova.',
    ],
    'lte'                  => [
        'array'   => 'Polje :attribute ne smije imati više od :value stavki.',
        'file'    => 'Polje :attribute mora biti manje ili jednako :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti manje ili jednako :value.',
        'string'  => 'Polje :attribute mora biti manje ili jednako :value znakova.',
    ],
    'mac_address'          => 'Polje :attribute mora biti ispravna MAC adresa.',
    'max'                  => [
        'array'   => 'Polje :attribute ne smije imati više od :max stavki.',
        'file'    => 'Polje :attribute mora biti manje od :max kilobajta.',
        'numeric' => 'Polje :attribute mora biti manje od :max.',
        'string'  => 'Polje :attribute mora sadržavati manje od :max znakova.',
    ],
    'max_digits'           => 'Polje :attribute ne smije imati više od :max znamenaka.',
    'mimes'                => 'Polje :attribute mora biti datoteka tipa: :values.',
    'mimetypes'            => 'Polje :attribute mora biti datoteka tipa: :values.',
    'min'                  => [
        'array'   => 'Polje :attribute mora sadržavati najmanje :min stavki.',
        'file'    => 'Polje :attribute mora biti najmanje :min kilobajta.',
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'string'  => 'Polje :attribute mora sadržavati najmanje :min znakova.',
    ],
    'min_digits'           => 'Polje :attribute mora sadržavati najmanje :min znamenaka.',
    'missing'              => 'Polje :attribute mora nedostajati.',
    'missing_if'           => 'Polje :attribute mora nedostajati kada je :other :value.',
    'missing_unless'       => 'Polje :attribute mora nedostajati osim ako je :other :value.',
    'missing_with'         => 'Polje :attribute mora nedostajati kada je :values prisutno.',
    'missing_with_all'     => 'Polje :attribute mora nedostajati kada je :values prisutno.',
    'multiple_of'          => 'Broj :attribute mora biti višekratnik :value',
    'not_in'               => 'Odabrano polje :attribute nije ispravno.',
    'not_regex'            => 'Format polja :attribute je neispravan.',
    'numeric'              => 'Polje :attribute mora biti broj.',
    'password'             => [
        'letters'       => 'Polje :attribute mora sadržavati najmanje jedno slovo.',
        'mixed'         => 'Polje :attribute mora sadržavati najmanje jedno veliko i jedno malo slovo.',
        'numbers'       => 'Polje :attribute mora sadržavati najmanje jedan broj.',
        'symbols'       => 'Polje :attribute mora sadržavati najmanje jedan simbol.',
        'uncompromised' => 'Vrijednost u :attribute se pojavila u curenju informacija. Molimo vas da odaberete drugu vrijednost za :attribute.',
    ],
    'present'              => 'Polje :attribute mora biti prisutno.',
    'present_if'           => 'Polje :attribute mora biti prisutno kada je :other :value.',
    'present_unless'       => 'Polje :attribute mora biti prisutno osim ako je :other :value.',
    'present_with'         => 'Polje :attribute mora biti prisutno kada je prisutno :values.',
    'present_with_all'     => 'Polje :attribute mora biti prisutno kada je prisutno :values.',
    'prohibited'           => 'Polje :attribute je zabranjeno.',
    'prohibited_if'        => 'Polje :attribute zabranjeno je kada je :other :value.',
    'prohibited_unless'    => 'Polje :attribute zabranjeno je, osim ako :other nije u :values.',
    'prohibits'            => 'Polje :attribute zabranjuje da polje :other bude prisutno.',
    'regex'                => 'Polje :attribute se ne podudara s formatom.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_array_keys'  => 'Polje :attribute mora sadržavati unose za: :values.',
    'required_if'          => 'Polje :attribute je obavezno kada polje :other sadrži :value.',
    'required_if_accepted' => 'Polje :attribute je obavezno kada je prihvaćeno polje :other.',
    'required_unless'      => 'Polje :attribute je obavezno osim :other je u :values.',
    'required_with'        => 'Polje :attribute je obavezno kada postoji polje :values.',
    'required_with_all'    => 'Polje :attribute je obavezno kada postje polja :values.',
    'required_without'     => 'Polje :attribute je obavezno kada ne postoji polje :values.',
    'required_without_all' => 'Polje :attribute je obavezno kada nijedno od polja :values ne postoji.',
    'same'                 => 'Polja :attribute i :other se moraju podudarati.',
    'size'                 => [
        'array'   => 'Polje :attribute mora sadržavati :size stavki.',
        'file'    => 'Polje :attribute mora biti :size kilobajta.',
        'numeric' => 'Polje :attribute mora biti :size.',
        'string'  => 'Polje :attribute mora biti :size znakova.',
    ],
    'starts_with'          => 'Stavka :attribute mora započinjati jednom od narednih stavki: :values',
    'string'               => 'Polje :attribute mora biti riječ.',
    'timezone'             => 'Polje :attribute mora biti ispravna vremenska zona.',
    'ulid'                 => 'Polje :attribute mora biti valjani ULID.',
    'unique'               => 'Polje :attribute već postoji.',
    'uploaded'             => 'Polje :attribute nije uspešno učitano.',
    'uppercase'            => 'Polje :attribute mora sadržavati samo velika slova.',
    'url'                  => 'Polje :attribute mora biti ispravan URL.',
    'uuid'                 => 'Polje :attribute mora biti valjani UUID.',
    'attributes'           => [
        'address'                  => 'adresa',
        'age'                      => 'dob',
        'amount'                   => 'iznos',
        'area'                     => 'površina',
        'available'                => 'dostupno',
        'birthday'                 => 'rođendan',
        'body'                     => 'tijelo',
        'city'                     => 'grad',
        'content'                  => 'sadržaj',
        'country'                  => 'država',
        'created_at'               => 'kreirano',
        'creator'                  => 'autor',
        'current_password'         => 'trenutna lozinka',
        'date'                     => 'datum',
        'date_of_birth'            => 'datum rođenja',
        'day'                      => 'dan',
        'deleted_at'               => 'obrisano',
        'description'              => 'opis',
        'district'                 => 'općina',
        'duration'                 => 'trajanje',
        'email'                    => 'elektronička pošta',
        'excerpt'                  => 'izdvojeno',
        'filter'                   => 'filtar',
        'first_name'               => 'ime',
        'gender'                   => 'spol',
        'group'                    => 'grupa',
        'hour'                     => 'sat',
        'image'                    => 'slika',
        'last_name'                => 'prezime',
        'lesson'                   => 'lekcija',
        'line_address_1'           => 'adresa',
        'line_address_2'           => 'dodatak adresi',
        'message'                  => 'poruka',
        'middle_name'              => 'srednje ime',
        'minute'                   => 'minuta',
        'mobile'                   => 'mobitel',
        'month'                    => 'mjesec',
        'name'                     => 'ime',
        'national_code'            => 'Nacionalni kod',
        'number'                   => 'broj',
        'password'                 => 'lozinka',
        'password_confirmation'    => 'potvrda lozinke',
        'phone'                    => 'telefon',
        'photo'                    => 'fotografija',
        'postal_code'              => 'poštanski broj',
        'price'                    => 'cijena',
        'province'                 => 'pokrajina',
        'recaptcha_response_field' => 'recaptcha polje',
        'remember'                 => 'zapamti me',
        'restored_at'              => 'vraćeno',
        'result_text_under_image'  => 'tekst rezultata ispod slike',
        'role'                     => 'uloga',
        'second'                   => 'sekunda',
        'sex'                      => 'spol',
        'short_text'               => 'kratak tekst',
        'size'                     => 'veličina',
        'state'                    => 'država',
        'street'                   => 'ulica',
        'student'                  => 'učenik',
        'subject'                  => 'predmet',
        'teacher'                  => 'učitelj',
        'terms'                    => 'uvjeti',
        'test_description'         => 'testni opis',
        'test_locale'              => 'testni jezik',
        'test_name'                => 'testno ime',
        'text'                     => 'tekst',
        'time'                     => 'vrijeme',
        'title'                    => 'naslov',
        'updated_at'               => 'ažurirano',
        'username'                 => 'korisničko ime',
        'year'                     => 'godina',
    ],
];
