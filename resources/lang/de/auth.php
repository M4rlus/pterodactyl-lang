<?php

return [
    'sign_in' => 'Einloggen',
    'go_to_login' => 'Zum Login',
    'failed' => 'Es wurde kein Account mit diesen Zugangsdaten gefunden',

    'forgot_password' => [
        'label' => 'Passwort vergessen?',
        'label_help' => 'Enter your account email address to receive instructions on resetting your password.',
        'button' => 'Account reaktivieren',
    ],

    'reset_password' => [
        'button' => 'Passwort zurücksetzen und einloggen',
    ],

    'two_factor' => [
        'label' => '2-Faktor Token',
        'label_help' => 'Bei diesem Account ist 2-Faktor Authentifizierung aktiviert, bitte benutzen Sie den 2-Faktor Token',
        'checkpoint_failed' => 'Der 2-Faktor Token ist falsch.',
    ],

    'throttle' => 'Zu viele Loginversuche. Bitte versuchen sie es in :seconds Sekunden erneut.',
    'password_requirements' => 'Das Passwort muss mindestens 8 Zeichen lang sein und sollte einzigartig sein',
    '2fa_must_be_enabled' => 'Diese Seite benötigt 2-Faktor Authentifizerung damit du sie benutzen kannst.',
];
