<?php

return [
    'notices' => [
        'created' => 'Nowe gniazdo, :name, zostało pomyślnie utworzone.',
        'deleted' => 'Pomyślnie usunięto żądane gniazdo z panelu.',
        'updated' => 'Pomyślnie zaktualizowano opcje konfiguracji gniazda.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Pomyślnie zaimportowano ten Egg i jego powiązane zmienne.',
            'updated_via_import' => 'Ten Egg został zaktualizowany przy użyciu dostarczonego pliku.',
            'deleted' => 'Pomyślnie usunięto żądany egg z panelu.',
            'updated' => 'Konfiguracja egga została pomyślnie zaktualizowana.',
            'script_updated' => 'Skrypt instalacyjny egga został zaktualizowany i będzie uruchamiany przy instalacji serwerów.',
            'egg_created' => 'Nowy egg został pomyślnie utworzony. Będziesz musiał zrestartować wszystkie działające demony, aby zastosować tego nowego egga.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Zmienna ":variable" została usunięta i nie będzie już dostępna dla serwerów po ich przebudowie.',
            'variable_updated' => 'Zmienna ":variable" została zaktualizowana. Będziesz musiał przebudować wszystkie serwery używające tej zmiennej, aby zastosować zmiany.',
            'variable_created' => 'Nowa zmienna została pomyślnie utworzona i przypisana do tego egga.',
        ],
    ],
];