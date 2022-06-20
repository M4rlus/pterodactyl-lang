<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Der bereitgestellte FQDN oder die angegebene IP-Adresse wird nicht in eine gültige IP-Adresse aufgelöst.',
        'fqdn_required_for_ssl' => 'Ein vollständig qualifizierter Domänenname, der in eine öffentliche IP-Adresse aufgelöst wird, ist erforderlich, um SSL für diesen Knoten zu verwenden.',
    ],
    'notices' => [
        'allocations_added' => 'Zuweisungen wurden erfolgreich zu diesem Knoten hinzugefügt.',
        'node_deleted' => 'Das Node wurde erfolgreich aus dem Panel entfernt.',
        'location_required' => 'Sie müssen mindestens einen Standort konfiguriert haben, bevor Sie diesem Bereich einen Node hinzufügen können.',
        'node_created' => 'Neuer Node erfolgreich erstellt. Sie können den Daemon auf diesem Computer automatisch konfigurieren, indem Sie die Registerkarte \'Konfiguration\' aufrufen. <strong>Bevor Sie Server hinzufügen können, müssen Sie zuerst mindestens eine IP-Adresse und einen Port zuweisen.</strong>',
        'node_updated' => 'Nodeformationen wurden aktualisiert. Wenn Daemon-Einstellungen geändert wurden, müssen Sie ihn neu starten, damit diese Änderungen wirksam werden.',
        'unallocated_deleted' => 'Alle nicht zugewiesenen Ports gelöscht für <code>:ip</code>.',
    ],
];
