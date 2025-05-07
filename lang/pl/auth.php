<?php

return [
    'sign_in' => 'Zaloguj się',
    'go_to_login' => 'Przejdź do logowania',
    'failed' => 'Nie znaleziono konta o podanych danych logowania.',

    'forgot_password' => [
        'label' => 'Zapomniałeś hasła?',
        'label_help' => 'Wprowadź adres email swojego konta, aby otrzymać instrukcje dotyczące resetowania hasła.',
        'button' => 'Odzyskaj konto',
    ],

    'reset_password' => [
        'button' => 'Zresetuj i zaloguj się',
    ],

    'two_factor' => [
        'label' => 'Token 2FA',
        'label_help' => 'To konto wymaga drugiej warstwy uwierzytelnienia, aby kontynuować. Wprowadź kod wygenerowany przez Twoje urządzenie, aby zakończyć logowanie.',
        'checkpoint_failed' => 'Token uwierzytelniania dwuskładnikowego jest nieprawidłowy.',
    ],

    'throttle' => 'Zbyt wiele prób logowania. Spróbuj ponownie za :seconds sekund.',
    'password_requirements' => 'Hasło musi mieć co najmniej 8 znaków i powinno być unikalne dla tej strony.',
    '2fa_must_be_enabled' => 'Administrator wymaga włączenia uwierzytelniania dwuskładnikowego dla Twojego konta, aby korzystać z Panelu.',
];