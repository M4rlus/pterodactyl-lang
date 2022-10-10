<?php

return [
    'sign_in' => 'Créer un compte',
    'go_to_login' => 'Se connecter',
    'failed' => 'Aucun compte avec ces Identifiants',

    'forgot_password' => [
        'label' => 'Mot de passe oublié?',
        'label_help' => 'Mettez votre adresse email pour vous permettre de changer votre mot de passe.',
        'button' => 'Envoyer l'email',
    ],

    'reset_password' => [
        'button' => 'Reset le password et recommencer',
    ],

    'two_factor' => [
        'label' => '2-Facteurs Token',
        'label_help' => 'Ce compte nécessite une deuxième couche de authentification pour continuer. Veuillez entrer le code généré par votre appareil pour terminer cette connexion.',
        'checkpoint_failed' => 'Le code A2F est invalide.',
    ],
    'throttle' => 'Trop de tentatives de connexion. Merci de réessayer dans :seconds secondes.',
    'password_requirements' => 'Le mot de passe doit comporter au moins 8 caractères et doit être unique pour ce site.',
    '2fa_must_be_enabled' => 'Administrateur a demandé que authentification à 2 facteurs soit activée pour votre compte afin d'utiliser le Panel.',
];
