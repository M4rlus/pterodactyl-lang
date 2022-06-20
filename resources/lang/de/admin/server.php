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
        'no_new_default_allocation' => 'Diese Allocation kann nicht gelöscht werden, da es keine andere gibt.',
        'marked_as_failed' => 'This server was marked as having failed a previous installation. Current status cannot be toggled in this state.',
        'bad_variable' => 'There was a validation error with the :name variable.',
        'daemon_exception' => 'There was an exception while attempting to communicate with the daemon resulting in a HTTP/:code response code. This exception has been logged. (request id: :request_id)',
        'default_allocation_not_found' => 'The requested default allocation was not found in this server\'s allocations.',
    ],
    'alerts' => [
        'startup_changed' => 'Die Konfiguration des Servers verändert. Wenn das Nest oder das Ei geändert wurde, wird der Server neu installiert..',
        'server_deleted' => 'Der Server wurde erfolgreich gelöscht.',
        'server_created' => 'Der Server wurde erfolgreich erstellt. Warte einen Moment, bis der Server installiert ist.',
        'build_updated' => 'Einstellungen des Servers wurden verändert. Eventuell muss der Server neugestartet werden.',
        'suspension_toggled' => 'Server suspension status has been changed to :status.',
        'rebuild_on_boot' => 'Der Server benötigt einen neuen Docker-Container. Beim nächsten Starten wird dieser erstellt..',
        'install_toggled' => 'The installation status for this server has been toggled.',
        'server_reinstalled' => 'Der Server wird neuinstalliert.',
        'details_updated' => 'Die Einstellungen wurden erfolgreich gespeichert.',
        'docker_image_updated' => 'Successfully changed the default Docker image to use for this server. A reboot is required to apply this change.',
        'node_required' => 'You must have at least one node configured before you can add a server to this panel.',
        'transfer_nodes_required' => 'Du benötigst mindenstens zwei Nodes, bevor ein Server transferiert werden kann.',
        'transfer_started' => 'Der Transfer wurde gestartet.',
        'transfer_not_viable' => 'The node you selected does not have the required disk space or memory available to accommodate this server.',
    ],
];
