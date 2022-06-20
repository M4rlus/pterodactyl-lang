<?php

return [
    'email' => [
        'title' => 'E-Mail-Adresse aktualisieren ',
        'updated' => 'E-Mail-Adresse wurde aktualisiert.',
    ],
    'password' => [
        'title' => 'Passwort ändern',
        'requirements' => 'Das neue Passwort sollte mindestens 8 Zeichen lang sein.',
        'updated' => 'Passwort wurde aktualisiert.',
    ],
    'two_factor' => [
        'button' => '2-Faktor-Authentifizierung konfigurieren',
        'disabled' => 'Die Zwei-Faktor-Authentifizierung wurde für Ihr Konto deaktiviert. Sie werden bei der Anmeldung nicht mehr aufgefordert, ein Token einzugeben.',
        'enabled' => 'Die Zwei-Faktor-Authentifizierung wurde für Ihr Konto aktiviert! Von nun an müssen Sie bei der Anmeldung den von Ihrem Gerät generierten Code eingeben.',
        'invalid' => 'Das bereitgestellte Token war ungültig.',
        'setup' => [
            'title' => 'Zwei-Faktor-Authentifizierung einrichten',
            'help' => 'Sie können den Code nicht scannen? Geben Sie den unten stehenden Code in Ihre Bewerbung ein:',
            'field' => 'Token eingeben',
        ],
        'disable' => [
            'title' => 'Deaktivieren Sie die Zwei-Faktor-Authentifizierung',
            'field' => 'Token eingeben',
        ],
    ],
];
