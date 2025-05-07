<?php

return [
    'daemon_connection_failed' => 'Wystąpił błąd podczas próby komunikacji z demonem, co skutkowało kodem odpowiedzi HTTP/:code. Ten wyjątek został zarejestrowany.',
    'node' => [
        'servers_attached' => 'Węzeł nie może mieć przypisanych serwerów, aby można go było usunąć.',
        'daemon_off_config_updated' => 'Konfiguracja demona <strong>została zaktualizowana</strong>, jednak wystąpił błąd podczas próby automatycznej aktualizacji pliku konfiguracyjnego na Demonie. Będziesz musiał ręcznie zaktualizować plik konfiguracyjny (config.yml) demona, aby zastosować te zmiany.',
    ],
    'allocations' => [
        'server_using' => 'Serwer jest obecnie przypisany do tej alokacji. Alokację można usunąć tylko wtedy, gdy żaden serwer nie jest obecnie przypisany.',
        'too_many_ports' => 'Dodawanie więcej niż 1000 portów w jednym zakresie naraz nie jest obsługiwane.',
        'invalid_mapping' => 'Mapowanie podane dla portu :port było nieprawidłowe i nie mogło zostać przetworzone.',
        'cidr_out_of_range' => 'Notacja CIDR pozwala tylko na maski od /25 do /32.',
        'port_out_of_range' => 'Porty w alokacji muszą być większe niż 1024 i mniejsze lub równe 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Gniazdo z aktywnymi serwerami nie może zostać usunięte z Panelu.',
        'egg' => [
            'delete_has_servers' => 'Egg z aktywnymi serwerami nie może zostać usunięty z Panelu.',
            'invalid_copy_id' => 'Egg wybrany do skopiowania skryptu nie istnieje lub sam kopiuje skrypt.',
            'must_be_child' => 'Dyrektywa "Kopiuj ustawienia z" dla tego Egg musi być opcją podrzędną dla wybranego Gniazda.',
            'has_children' => 'Ten Egg jest rodzicem dla jednego lub więcej innych Eggs. Proszę usunąć te Eggs przed usunięciem tego Egg.',
        ],
        'variables' => [
            'env_not_unique' => 'Zmienna środowiskowa :name musi być unikalna dla tego Egg.',
            'reserved_name' => 'Zmienna środowiskowa :name jest chroniona i nie może być przypisana do zmiennej.',
            'bad_validation_rule' => 'Reguła walidacji ":rule" nie jest prawidłową regułą dla tej aplikacji.',
        ],
        'importer' => [
            'json_error' => 'Wystąpił błąd podczas próby parsowania pliku JSON: :error.',
            'file_error' => 'Dostarczony plik JSON nie był prawidłowy.',
            'invalid_json_provided' => 'Dostarczony plik JSON nie jest w formacie, który może zostać rozpoznany.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Edytowanie własnego konta podużytkownika nie jest dozwolone.',
        'user_is_owner' => 'Nie możesz dodać właściciela serwera jako podużytkownika tego serwera.',
        'subuser_exists' => 'Użytkownik z tym adresem email jest już przypisany jako podużytkownik tego serwera.',
    ],
    'databases' => [
        'delete_has_databases' => 'Nie można usunąć hosta bazy danych, który ma aktywne bazy danych.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Maksymalny czas interwału dla zadania łańcuchowego wynosi 15 minut.',
    ],
    'locations' => [
        'has_nodes' => 'Nie można usunąć lokalizacji, która ma aktywne węzły.',
    ],
    'users' => [
        'node_revocation_failed' => 'Nie udało się odwołać kluczy na <a href=":link">Węźle #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Nie znaleziono węzłów spełniających wymagania określone dla automatycznego wdrożenia.',
        'no_viable_allocations' => 'Nie znaleziono alokacji spełniających wymagania automatycznego wdrożenia.',
    ],
    'api' => [
        'resource_not_found' => 'Żądany zasób nie istnieje na tym serwerze.',
    ],
];