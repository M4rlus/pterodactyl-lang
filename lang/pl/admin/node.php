<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Podany FQDN lub adres IP nie rozwiązuje się do prawidłowego adresu IP.',
        'fqdn_required_for_ssl' => 'W celu użycia SSL dla tego węzła wymagana jest w pełni kwalifikowana nazwa domeny, która rozwiązuje się do publicznego adresu IP.',
    ],
    'notices' => [
        'allocations_added' => 'Alokacje zostały pomyślnie dodane do tego węzła.',
        'node_deleted' => 'Węzeł został pomyślnie usunięty z panelu.',
        'location_required' => 'Musisz mieć skonfigurowaną co najmniej jedną lokalizację przed dodaniem węzła do tego panelu.',
        'node_created' => 'Pomyślnie utworzono nowy węzeł. Możesz automatycznie skonfigurować demona na tej maszynie, odwiedzając zakładkę \'Konfiguracja\'. <strong>Zanim będziesz mógł dodać jakiekolwiek serwery, musisz najpierw przydzielić co najmniej jeden adres IP i port.</strong>',
        'node_updated' => 'Informacje o węźle zostały zaktualizowane. Jeśli jakiekolwiek ustawienia demona zostały zmienione, będziesz musiał go zrestartować, aby te zmiany weszły w życie.',
        'unallocated_deleted' => 'Usunięto wszystkie nieprzydzielone porty dla <code>:ip</code>.',
    ],
];