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
        'fqdn_not_resolvable' => 'Het opgegeven FQDN of IP-adres wordt niet omgezet naar een geldig IP-adres.',
        'fqdn_required_for_ssl' => 'Een volledig gekwalificeerde domeinnaam die naar een openbaar IP-adres verwijst, is vereist om SSL te gebruiken voor deze node.',
    ],
    'notices' => [
        'allocations_added' => 'Allocaties zijn succesvol toegevoegd aan deze node.',
        'node_deleted' => 'Node is succesvol verwijderd uit het paneel.',
        'location_required' => 'Je moet minstens één locatie geconfigureerd hebben voordat je een node aan dit paneel kunt toevoegen.',
        'node_created' => 'Nieuwe node succesvol aangemaakt. Je kunt de daemon op deze machine automatisch configureren door het tabblad \'Configuratie\' te bezoeken. <strong>Voordat je servers kunt toevoegen, moet je minstens één IP-adres en poort toewijzen.</strong>',
        'node_updated' => 'Node-informatie is bijgewerkt. Als er wijzigingen zijn aangebracht in daemoninstellingen, moet je deze opnieuw opstarten voor deze wijzigingen van kracht worden.',
        'unallocated_deleted' => 'Alle niet-toegewezen poorten zijn verwijderd voor <code>:ip</code>.',
    ],
];

