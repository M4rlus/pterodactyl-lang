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
        'created' => 'Eine neues Nest, :name, wurde erfolgreich erstellt.',
        'deleted' => 'Das angeforderte Nest wurde erfolgreich aus dem Panel gelöscht.',
        'updated' => 'Konfigurationsoptionen vom Nest wurden erfolgreich aktualisiert.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Dieses Egg und die zugehörigen Variablen wurden erfolgreich importiert.',
            'updated_via_import' => 'Dieses Egg wurde mit der bereitgestellten Datei aktualisiert.',
            'deleted' => 'Das angeforderte Egg wurde erfolgreich aus dem Panel gelöscht.',
            'updated' => 'Die Eggkonfiguration wurde erfolgreich aktualisiert.',
            'script_updated' => 'Das Egg-Installationsskript wurde aktualisiert und wird ausgeführt, wenn Server installiert werden.',
            'egg_created' => 'Ein neues Egg wurde erfolgreich gelegt. Sie müssen alle laufenden Daemons neu starten, um dieses neue Egg anzuwenden.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Die Variable ":variable" wurde gelöscht und steht den Servern nach dem Neuaufbau nicht mehr zur Verfügung.',
            'variable_updated' => 'Die Variable ":variable" wurde aktualisiert. Sie müssen alle Server, die diese Variable verwenden, neu erstellen, um Änderungen anzuwenden.',
            'variable_created' => 'Neue Variable wurde erfolgreich erstellt und diesem Egg zugewiesen.',
        ],
    ],
];
