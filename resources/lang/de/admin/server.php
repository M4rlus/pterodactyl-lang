<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Sie versuchen, die Standardzuordnung für diesen Server zu löschen, aber es gibt keine zu verwendende Fallback-Zuordnung.',
        'marked_as_failed' => 'Dieser Server wurde als bei einer vorherigen Installation fehlgeschlagen markiert. Der aktuelle Status kann in diesem Zustand nicht umgeschaltet werden.',
        'bad_variable' => 'Bei der Variable :name ist ein Validierungsfehler aufgetreten.',
        'daemon_exception' => 'Beim Versuch, mit dem Daemon zu kommunizieren, ist eine Ausnahme aufgetreten, die zu einem HTTP/:code-Antwortcode führte. Diese Ausnahme wurde protokolliert. (Anfrage-ID: :request_id)',
        'default_allocation_not_found' => 'Die angeforderte Standardzuweisung wurde in den Zuweisungen dieses Servers nicht gefunden.',
    ],
    'alerts' => [
        'startup_changed' => 'Die Startkonfiguration für diesen Server wurde aktualisiert. Wenn das Nest oder Egg dieses Servers geändert wurde, wird jetzt eine Neuinstallation durchgeführt.',
        'server_deleted' => 'Server wurde erfolgreich aus dem System gelöscht.',
        'server_created' => 'Server wurde erfolgreich auf dem Panel erstellt. Bitte geben Sie dem Daemon ein paar Minuten Zeit, um diesen Server vollständig zu installieren.',
        'build_updated' => 'Die Build-Details für diesen Server wurden aktualisiert. Einige Änderungen erfordern möglicherweise einen Neustart, damit sie wirksam werden.',
        'suspension_toggled' => 'Der Server-Aussetzungsstatus wurde in :status geändert.',
        'rebuild_on_boot' => 'Dieser Server wurde so gekennzeichnet, dass er einen Docker-Container-Neuaufbau erfordert. Dies geschieht beim nächsten Start des Servers.',
        'install_toggled' => 'Der Installationsstatus für diesen Server wurde umgeschaltet.',
        'server_reinstalled' => 'Dieser Server wurde für eine jetzt beginnende Neuinstallation in die Warteschlange gestellt.',
        'details_updated' => 'Die Serverdetails wurden erfolgreich aktualisiert.',
        'docker_image_updated' => 'Das für diesen Server zu verwendende Standard-Docker-Image wurde erfolgreich geändert. Ein Neustart ist erforderlich, um diese Änderung zu übernehmen.',
        'node_required' => 'Sie müssen mindestens einen Node konfiguriert haben, bevor Sie in diesem Panel einen Server hinzufügen können.',
        'transfer_nodes_required' => 'Sie müssen mindestens zwei Nodes konfiguriert haben, bevor Sie Server übertragen können.',
        'transfer_started' => 'Die Serverübertragung wurde gestartet.',
        'transfer_not_viable' => 'Der ausgewählte Node verfügt nicht über den erforderlichen Speicherplatz oder Arbeitsspeicher, um diesen Server aufzunehmen.',
    ],
];
