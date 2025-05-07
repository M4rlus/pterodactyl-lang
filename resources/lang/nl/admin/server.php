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
        'no_new_default_allocation' => 'Je probeert de standaardallocatie voor deze server te verwijderen, maar er is geen vervangende allocatie beschikbaar.',
        'marked_as_failed' => 'Deze server is gemarkeerd als mislukt tijdens een eerdere installatie. De huidige status kan niet worden gewijzigd in deze toestand.',
        'bad_variable' => 'Er trad een validatiefout op met de variabele :name.',
        'daemon_exception' => 'Er trad een uitzondering op bij het communiceren met de daemon, resulterend in een HTTP/:code-responsecode. Deze uitzondering is gelogd. (verzoek-id: :request_id)',
        'default_allocation_not_found' => 'De gevraagde standaardallocatie is niet gevonden in de allocaties van deze server.',
    ],
    'alerts' => [
        'startup_changed' => 'De opstartconfiguratie voor deze server is bijgewerkt. Als het nest of Egg van deze server is gewijzigd, wordt nu een herinstallatie uitgevoerd.',
        'server_deleted' => 'Server is succesvol verwijderd uit het systeem.',
        'server_created' => 'Server is succesvol aangemaakt op het paneel. Geef de daemon enkele minuten om deze server volledig te installeren.',
        'build_updated' => 'De build-details voor deze server zijn bijgewerkt. Sommige wijzigingen vereisen een herstart om van kracht te worden.',
        'suspension_toggled' => 'De opschortingsstatus van de server is gewijzigd naar :status.',
        'rebuild_on_boot' => 'Deze server is gemarkeerd als vereisend een herinstallatie van de Docker-container. Dit gebeurt de volgende keer dat de server wordt gestart.',
        'install_toggled' => 'De installatiestatus voor deze server is gewijzigd.',
        'server_reinstalled' => 'Deze server is in de wachtrij gezet voor een herinstallatie die nu begint.',
        'details_updated' => 'Serverdetails zijn succesvol bijgewerkt.',
        'docker_image_updated' => 'De standaard Docker-image is succesvol gewijzigd voor deze server. Een herstart is vereist om deze wijziging toe te passen.',
        'node_required' => 'Je moet minstens één node geconfigureerd hebben voordat je een server aan dit paneel kunt toevoegen.',
        'transfer_nodes_required' => 'Je moet minstens twee nodes geconfigureerd hebben voordat je servers kunt overzetten.',
        'transfer_started' => 'De overdracht van de server is gestart.',
        'transfer_not_viable' => 'De door jou geselecteerde node heeft niet voldoende schijfruimte of geheugen beschikbaar om deze server te accommoderen.',
    ],
];
