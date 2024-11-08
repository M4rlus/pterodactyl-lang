<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Próbujesz usunąć domyślną alokację dla tego serwera, ale nie ma zapasowej alokacji do wykorzystania.',
        'marked_as_failed' => 'Ten serwer został oznaczony jako nieudana poprzednia instalacja. Nie można zmienić obecnego statusu w tym stanie.',
        'bad_variable' => 'Wystąpił błąd walidacji zmiennej :name.',
        'daemon_exception' => 'Wystąpił wyjątek podczas próby komunikacji z demonem, skutkując kodem odpowiedzi HTTP/:code. Ten wyjątek został zarejestrowany. (id żądania: :request_id)',
        'default_allocation_not_found' => 'Żądana domyślna alokacja nie została znaleziona w alokacjach tego serwera.',
    ],
    'alerts' => [
        'startup_changed' => 'Konfiguracja startowa tego serwera została zaktualizowana. Jeśli gniazdo lub egg serwera zostały zmienione, przeprowadzana jest ponowna instalacja.',
        'server_deleted' => 'Serwer został pomyślnie usunięty z systemu.',
        'server_created' => 'Serwer został pomyślnie utworzony w panelu. Proszę dać demonowi kilka minut na kompletną instalację tego serwera.',
        'build_updated' => 'Szczegóły kompilacji tego serwera zostały zaktualizowane. Niektóre zmiany mogą wymagać ponownego uruchomienia, aby wejść w życie.',
        'suspension_toggled' => 'Status zawieszenia serwera został zmieniony na :status.',
        'rebuild_on_boot' => 'Ten serwer został oznaczony jako wymagający przebudowy kontenera Docker. Nastąpi to przy następnym uruchomieniu serwera.',
        'install_toggled' => 'Status instalacji tego serwera został przełączony.',
        'server_reinstalled' => 'Ten serwer został umieszczony w kolejce do ponownej instalacji, która rozpoczyna się teraz.',
        'details_updated' => 'Szczegóły serwera zostały pomyślnie zaktualizowane.',
        'docker_image_updated' => 'Pomyślnie zmieniono domyślny obraz Docker dla tego serwera. Wymagane jest ponowne uruchomienie, aby zastosować tę zmianę.',
        'node_required' => 'Musisz mieć skonfigurowany co najmniej jeden węzeł przed dodaniem serwera do tego panelu.',
        'transfer_nodes_required' => 'Musisz mieć skonfigurowane co najmniej dwa węzły przed transferem serwerów.',
        'transfer_started' => 'Transfer serwera został rozpoczęty.',
        'transfer_not_viable' => 'Wybrany węzeł nie ma wymaganej przestrzeni dyskowej lub pamięci dostępnej dla tego serwera.',
    ],
];