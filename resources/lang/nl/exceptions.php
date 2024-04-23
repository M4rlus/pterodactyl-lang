<?php

return [
    'daemon_connection_failed' => 'Er trad een uitzondering op bij het proberen te communiceren met de daemon, resulterend in een HTTP/:code responscode. Deze uitzondering is gelogd.',
    'node' => [
        'servers_attached' => 'Een node moet geen servers gekoppeld hebben om verwijderd te kunnen worden.',
        'daemon_off_config_updated' => 'De daemonconfiguratie <strong>is bijgewerkt</strong>, echter is er een fout opgetreden bij het automatisch bijwerken van het configuratiebestand op de daemon. Je zult handmatig het configuratiebestand (config.yml) voor de daemon moeten bijwerken om deze wijzigingen toe te passen.',
    ],
    'allocations' => [
        'server_using' => 'Aan deze toewijzing is momenteel een server gekoppeld. Een toewijzing kan alleen worden verwijderd als er geen server aan gekoppeld is.',
        'too_many_ports' => 'Het toevoegen van meer dan 1000 poorten in één bereik tegelijk wordt niet ondersteund.',
        'invalid_mapping' => 'De mapping voor :port die is opgegeven was ongeldig en kon niet worden verwerkt.',
        'cidr_out_of_range' => 'CIDR-notatie staat alleen maskers toe tussen /25 en /32.',
        'port_out_of_range' => 'Poorten in een toewijzing moeten groter zijn dan 1024 en minder dan of gelijk aan 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Een Nest met actieve servers eraan gekoppeld kan niet worden verwijderd uit het paneel.',
        'egg' => [
            'delete_has_servers' => 'Een Egg met actieve servers eraan gekoppeld kan niet worden verwijderd uit het paneel.',
            'invalid_copy_id' => 'Het geselecteerde Egg om een script van te kopiëren bestaat niet of kopieert zelf een script.',
            'must_be_child' => 'De "Copy Settings From" directive voor dit Egg moet een kindoptie zijn voor het geselecteerde Nest.',
            'has_children' => 'Dit Egg is een ouder voor één of meer andere Eggs. Verwijder alstublieft die Eggs voordat je dit Egg verwijdert.',
        ],
        'variables' => [
            'env_not_unique' => 'De omgevingsvariabele :name moet uniek zijn voor dit Egg.',
            'reserved_name' => 'De omgevingsvariabele :name is beschermd en kan niet worden toegewezen aan een variabele.',
            'bad_validation_rule' => 'De validatieregel ":rule" is geen geldige regel voor deze toepassing.',
        ],
        'importer' => [
            'json_error' => 'Er trad een fout op bij het proberen om het JSON-bestand te parseren: :error.',
            'file_error' => 'Het verstrekte JSON-bestand was niet geldig.',
            'invalid_json_provided' => 'Het verstrekte JSON-bestand heeft geen herkenbaar formaat.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Het bewerken van je eigen subgebruikersaccount is niet toegestaan.',
        'user_is_owner' => 'Je kunt de servereigenaar niet toevoegen als een subgebruiker voor deze server.',
        'subuser_exists' => 'Een gebruiker met dat e-mailadres is al toegewezen als subgebruiker voor deze server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Kan een databasehostserver niet verwijderen die actieve databases eraan gekoppeld heeft.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'De maximale intervaltijd voor een gekoppelde taak is 15 minuten.',
    ],
    'locations' => [
        'has_nodes' => 'Kan een locatie niet verwijderen die actieve nodes eraan gekoppeld heeft.',
    ],
    'users' => [
        'node_revocation_failed' => 'Het intrekken van sleutels op <a href=":link">Node #:node</a> is mislukt. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Er konden geen nodes gevonden worden die voldoen aan de vereisten die zijn opgegeven voor automatische implementatie.',
        'no_viable_allocations' => 'Er konden geen toewijzingen gevonden worden die voldoen aan de vereisten voor automatische implementatie.',
    ],
    'api' => [
        'resource_not_found' => 'Het gevraagde bronbestand bestaat niet op deze server.',
    ],
];
