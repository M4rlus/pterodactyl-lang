<?php

return [
    'daemon_connection_failed' => 'Beim Versuch, mit dem Daemon zu kommunizieren, ist eine Ausnahme aufgetreten, die zu einem HTTP/:code-Antwortcode führte. Diese Ausnahme wurde protokolliert.',
    'node' => [
        'servers_attached' => 'Ein Node darf keine mit ihm verknüpften Server haben, um gelöscht zu werden.',
        'daemon_off_config_updated' => 'Die Daemon-Konfiguration wurde <strong>aktualisiert</strong>, beim Versuch, die Konfigurationsdatei auf dem Daemon automatisch zu aktualisieren, ist jedoch ein Fehler aufgetreten. Sie müssen die Konfigurationsdatei (config.yml) für den Daemon manuell aktualisieren, um diese Änderungen anzuwenden.',
    ],
    'allocations' => [
        'server_using' => 'Dieser Zuordnung ist derzeit ein Server zugeordnet. Eine Zuordnung kann nur gelöscht werden, wenn aktuell kein Server zugeordnet ist.',
        'too_many_ports' => 'Das gleichzeitige Hinzufügen von mehr als 1000 Ports in einem einzelnen Node wird nicht unterstützt.',
        'invalid_mapping' => 'Die für :port bereitgestellte Zuordnung war ungültig und konnte nicht verarbeitet werden.',
        'cidr_out_of_range' => 'Die CIDR-Notation erlaubt nur Masken zwischen /25 und /32.',
        'port_out_of_range' => 'Ports in einer Zuordnung müssen größer als 1024 und kleiner oder gleich 65535 sein.',
    ],
    'nest' => [
        'delete_has_servers' => 'Ein Nest mit daran angeschlossenen aktiven Servern kann nicht aus dem Panel gelöscht werden.',
        'egg' => [
            'delete_has_servers' => 'Ein Egg mit daran angeschlossenen aktiven Servern kann nicht aus dem Panel gelöscht werden.',
            'invalid_copy_id' => 'Das zum Kopieren eines Skripts vom ausgewählte Egg existiert entweder nicht oder kopiert selbst ein Skript.',
            'must_be_child' => 'Die Anweisung "Einstellungen kopieren von" für dieses Egg muss eine untergeordnete Option für das ausgewählte Nest sein.',
            'has_children' => 'Dieses Egg ist ein Elternteil von einem oder mehreren anderen Eggs. Bitte löschen Sie diese Eggs, bevor Sie dieses Egg löschen.',
        ],
        'variables' => [
            'env_not_unique' => 'Die Umgebungsvariable :name muss für dieses Egg eindeutig sein.',
            'reserved_name' => 'Die Umgebungsvariable :name ist geschützt und kann keiner Variablen zugewiesen werden.',
            'bad_validation_rule' => 'Die Validierungsregel ":rule" ist keine gültige Regel für diese Anwendung.',
        ],
        'importer' => [
            'json_error' => 'Beim Versuch, die JSON-Datei zu analysieren, ist ein Fehler aufgetreten: :error.',
            'file_error' => 'Die bereitgestellte JSON-Datei war ungültig.',
            'invalid_json_provided' => 'Die bereitgestellte JSON-Datei hat kein erkennbares Format.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Das Bearbeiten Ihres eigenen Unterbenutzerkontos ist nicht gestattet.',
        'user_is_owner' => 'Sie können den Serverbesitzer nicht als Unterbenutzer für diesen Server hinzufügen.',
        'subuser_exists' => 'Ein Benutzer mit dieser E-Mail-Adresse ist diesem Server bereits als Unterbenutzer zugewiesen.',
    ],
    'databases' => [
        'delete_has_databases' => 'Ein Datenbankhostserver, mit dem aktive Datenbanken verknüpft sind, kann nicht gelöscht werden.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Die maximale Intervallzeit für eine verkettete Aufgabe beträgt 15 Minuten.',
    ],
    'locations' => [
        'has_nodes' => 'Ein Standort mit angehängten aktiven Nodes kann nicht gelöscht werden.',
    ],
    'users' => [
        'node_revocation_failed' => 'Fehler beim Widerrufen von Schlüsseln auf <a href=":link">Node #:node</a>. :Error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Es konnten keine Nodes gefunden werden, die die für die automatische Bereitstellung angegebenen Anforderungen erfüllen.',
        'no_viable_allocations' => 'Es wurden keine Zuordnungen gefunden, die die Anforderungen für die automatische Bereitstellung erfüllen.',
    ],
    'api' => [
        'resource_not_found' => 'Die angeforderte Ressource ist auf diesem Server nicht vorhanden.',
    ],
];
