<?php

return [
    'location' => [
        'no_location_found' => 'Nie można znaleźć rekordu pasującego do podanego krótkiego kodu.',
        'ask_short' => 'Krótki kod lokalizacji',
        'ask_long' => 'Opis lokalizacji',
        'created' => 'Pomyślnie utworzono nową lokalizację (:name) z ID :id.',
        'deleted' => 'Pomyślnie usunięto wybraną lokalizację.',
    ],
    'user' => [
        'search_users' => 'Wprowadź nazwę użytkownika, ID użytkownika lub adres email',
        'select_search_user' => 'ID użytkownika do usunięcia (Wprowadź \'0\' aby wyszukać ponownie)',
        'deleted' => 'Użytkownik został pomyślnie usunięty z panelu.',
        'confirm_delete' => 'Czy na pewno chcesz usunąć tego użytkownika z panelu?',
        'no_users_found' => 'Nie znaleziono użytkowników dla podanego terminu wyszukiwania.',
        'multiple_found' => 'Znaleziono wiele kont dla podanego użytkownika, nie można usunąć użytkownika z powodu flagi --no-interaction.',
        'ask_admin' => 'Czy ten użytkownik jest administratorem?',
        'ask_email' => 'Adres email',
        'ask_username' => 'Nazwa użytkownika',
        'ask_name_first' => 'Imię',
        'ask_name_last' => 'Nazwisko',
        'ask_password' => 'Hasło',
        'ask_password_tip' => 'Jeśli chcesz utworzyć konto z losowym hasłem wysłanym do użytkownika emailem, uruchom ponownie to polecenie (CTRL+C) i dodaj flagę `--no-password`.',
        'ask_password_help' => 'Hasła muszą mieć co najmniej 8 znaków długości i zawierać przynajmniej jedną wielką literę i cyfrę.',
        '2fa_help_text' => [
            'To polecenie wyłączy uwierzytelnianie dwuskładnikowe dla konta użytkownika, jeśli jest włączone. Powinno być używane tylko jako polecenie odzyskiwania konta, jeśli użytkownik został zablokowany.',
            'Jeśli nie to chciałeś zrobić, naciśnij CTRL+C, aby przerwać ten proces.',
        ],
        '2fa_disabled' => 'Uwierzytelnianie dwuskładnikowe zostało wyłączone dla :email.',
    ],
    'schedule' => [
        'output_line' => 'Wysyłanie zadania dla pierwszego zadania w `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Usuwanie pliku kopii zapasowej usługi :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Żądanie przebudowy dla ":name" (#:id) na węźle ":node" nie powiodło się z błędem: :message',
        'reinstall' => [
            'failed' => 'Żądanie ponownej instalacji dla ":name" (#:id) na węźle ":node" nie powiodło się z błędem: :message',
            'confirm' => 'Zamierzasz przeprowadzić ponowną instalację dla grupy serwerów. Czy chcesz kontynuować?',
        ],
        'power' => [
            'confirm' => 'Zamierzasz wykonać działanie :action na :count serwerach. Czy chcesz kontynuować?',
            'action_failed' => 'Żądanie akcji zasilania dla ":name" (#:id) na węźle ":node" nie powiodło się z błędem: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Host SMTP (np. smtp.gmail.com)',
            'ask_smtp_port' => 'Port SMTP',
            'ask_smtp_username' => 'Nazwa użytkownika SMTP',
            'ask_smtp_password' => 'Hasło SMTP',
            'ask_mailgun_domain' => 'Domena Mailgun',
            'ask_mailgun_endpoint' => 'Endpoint Mailgun',
            'ask_mailgun_secret' => 'Sekret Mailgun',
            'ask_mandrill_secret' => 'Sekret Mandrill',
            'ask_postmark_username' => 'Klucz API Postmark',
            'ask_driver' => 'Który sterownik powinien być używany do wysyłania emaili?',
            'ask_mail_from' => 'Adres email, z którego powinny pochodzić wiadomości',
            'ask_mail_name' => 'Nazwa, która powinna pojawiać się jako nadawca',
            'ask_encryption' => 'Metoda szyfrowania do użycia',
        ],
    ],
];