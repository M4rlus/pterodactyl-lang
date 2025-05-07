<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Een nieuw nest, :name, is succesvol aangemaakt.',
        'deleted' => 'Het gevraagde nest is succesvol verwijderd uit het paneel.',
        'updated' => 'De nestconfiguratieopties zijn succesvol bijgewerkt.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Dit Egg en de bijbehorende variabelen zijn succesvol geïmporteerd.',
            'updated_via_import' => 'Dit Egg is bijgewerkt met het meegeleverde bestand.',
            'deleted' => 'Het gevraagde Egg is succesvol verwijderd uit het paneel.',
            'updated' => 'Egg-configuratie is succesvol bijgewerkt.',
            'script_updated' => 'Het installatiescript van het Egg is bijgewerkt en wordt uitgevoerd wanneer servers worden geïnstalleerd.',
            'egg_created' => 'Er is succesvol een nieuw Egg gelegd. Je moet alle draaiende daemons opnieuw starten om dit nieuwe Egg toe te passen.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'De variabele ":variable" is verwijderd en zal niet langer beschikbaar zijn voor servers zodra ze opnieuw zijn opgebouwd.',
            'variable_updated' => 'De variabele ":variable" is bijgewerkt. Je moet servers opnieuw opbouwen die deze variabele gebruiken om wijzigingen toe te passen.',
            'variable_created' => 'Er is succesvol een nieuwe variabele aangemaakt en toegewezen aan dit Egg.',
        ],
    ],
];
