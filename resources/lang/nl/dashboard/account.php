<?php

return [
    'email' => [
        'title' => 'Wijzig je e-mailadres',
        'updated' => 'Je e-mailadres is bijgewerkt.',
    ],
    'password' => [
        'title' => 'Wijzig je wachtwoord',
        'requirements' => 'Je nieuwe wachtwoord moet minimaal 8 tekens lang zijn.',
        'updated' => 'Je wachtwoord is bijgewerkt.',
    ],
    'two_factor' => [
        'button' => 'Configureer Tweefactorauthenticatie',
        'disabled' => 'Tweefactorauthenticatie is uitgeschakeld op je account. Je hoeft geen token meer op te geven bij het inloggen.',
        'enabled' => 'Tweefactorauthenticatie is ingeschakeld op je account! Vanaf nu moet je bij het inloggen de code invoeren die wordt gegenereerd door je apparaat.',
        'invalid' => 'Het opgegeven token was ongeldig.',
        'setup' => [
            'title' => 'Tweefactorauthenticatie instellen',
            'help' => 'Kun je de code niet scannen? Voer de code hieronder in je applicatie in:',
            'field' => 'Voer token in',
        ],
        'disable' => [
            'title' => 'Tweefactorauthenticatie uitschakelen',
            'field' => 'Voer token in',
        ],
    ],
];
