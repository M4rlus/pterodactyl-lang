<?php

/**
 * Zawiera wszystkie ciągi tłumaczeń dla różnych zdarzeń
 * dziennika aktywności. Powinny być oznaczone wartością przed dwukropkiem (:)
 * w nazwie zdarzenia. Jeśli nie ma dwukropka, powinny znajdować się na
 * najwyższym poziomie.
 */
return [
    'auth' => [
        'fail' => 'Nieudane logowanie',
        'success' => 'Zalogowano',
        'password-reset' => 'Zresetowano hasło',
        'reset-password' => 'Zażądano resetowania hasła',
        'checkpoint' => 'Wymagane uwierzytelnianie dwuskładnikowe',
        'recovery-token' => 'Użyto tokena odzyskiwania 2FA',
        'token' => 'Rozwiązano wyzwanie dwuskładnikowe',
        'ip-blocked' => 'Zablokowano żądanie z niewypisanego adresu IP dla :identifier',
        'sftp' => [
            'fail' => 'Nieudane logowanie SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Zmieniono email z :old na :new',
            'password-changed' => 'Zmieniono hasło',
        ],
        'api-key' => [
            'create' => 'Utworzono nowy klucz API :identifier',
            'delete' => 'Usunięto klucz API :identifier',
        ],
        'ssh-key' => [
            'create' => 'Dodano klucz SSH :fingerprint do konta',
            'delete' => 'Usunięto klucz SSH :fingerprint z konta',
        ],
        'two-factor' => [
            'create' => 'Włączono uwierzytelnianie dwuskładnikowe',
            'delete' => 'Wyłączono uwierzytelnianie dwuskładnikowe',
        ],
    ],
    'server' => [
        'reinstall' => 'Przeinstalowano serwer',
        'console' => [
            'command' => 'Wykonano polecenie ":command" na serwerze',
        ],
        'power' => [
            'start' => 'Uruchomiono serwer',
            'stop' => 'Zatrzymano serwer',
            'restart' => 'Zrestartowano serwer',
            'kill' => 'Zakończono proces serwera',
        ],
        'backup' => [
            'download' => 'Pobrano kopię zapasową :name',
            'delete' => 'Usunięto kopię zapasową :name',
            'restore' => 'Przywrócono kopię zapasową :name (usunięte pliki: :truncate)',
            'restore-complete' => 'Zakończono przywracanie kopii zapasowej :name',
            'restore-failed' => 'Nie udało się zakończyć przywracania kopii zapasowej :name',
            'start' => 'Rozpoczęto nową kopię zapasową :name',
            'complete' => 'Oznaczono kopię zapasową :name jako zakończoną',
            'fail' => 'Oznaczono kopię zapasową :name jako nieudaną',
            'lock' => 'Zablokowano kopię zapasową :name',
            'unlock' => 'Odblokowano kopię zapasową :name',
        ],
        'database' => [
            'create' => 'Utworzono nową bazę danych :name',
            'rotate-password' => 'Zmieniono hasło dla bazy danych :name',
            'delete' => 'Usunięto bazę danych :name',
        ],
        'file' => [
            'compress_one' => 'Skompresowano :directory:file',
            'compress_other' => 'Skompresowano :count plików w :directory',
            'read' => 'Wyświetlono zawartość :file',
            'copy' => 'Utworzono kopię :file',
            'create-directory' => 'Utworzono katalog :directory:name',
            'decompress' => 'Rozpakowano :files w :directory',
            'delete_one' => 'Usunięto :directory:files.0',
            'delete_other' => 'Usunięto :count plików w :directory',
            'download' => 'Pobrano :file',
            'pull' => 'Pobrano zdalny plik z :url do :directory',
            'rename_one' => 'Zmieniono nazwę :directory:files.0.from na :directory:files.0.to',
            'rename_other' => 'Zmieniono nazwę :count plików w :directory',
            'write' => 'Zapisano nową zawartość do :file',
            'upload' => 'Rozpoczęto przesyłanie pliku',
            'uploaded' => 'Przesłano :directory:file',
        ],
        'sftp' => [
            'denied' => 'Zablokowano dostęp SFTP z powodu uprawnień',
            'create_one' => 'Utworzono :files.0',
            'create_other' => 'Utworzono :count nowych plików',
            'write_one' => 'Zmodyfikowano zawartość :files.0',
            'write_other' => 'Zmodyfikowano zawartość :count plików',
            'delete_one' => 'Usunięto :files.0',
            'delete_other' => 'Usunięto :count plików',
            'create-directory_one' => 'Utworzono katalog :files.0',
            'create-directory_other' => 'Utworzono :count katalogów',
            'rename_one' => 'Zmieniono nazwę :files.0.from na :files.0.to',
            'rename_other' => 'Zmieniono nazwę lub przeniesiono :count plików',
        ],
        'allocation' => [
            'create' => 'Dodano :allocation do serwera',
            'notes' => 'Zaktualizowano notatki dla :allocation z ":old" na ":new"',
            'primary' => 'Ustawiono :allocation jako główną alokację serwera',
            'delete' => 'Usunięto alokację :allocation',
        ],
        'schedule' => [
            'create' => 'Utworzono harmonogram :name',
            'update' => 'Zaktualizowano harmonogram :name',
            'execute' => 'Ręcznie wykonano harmonogram :name',
            'delete' => 'Usunięto harmonogram :name',
        ],
        'task' => [
            'create' => 'Utworzono nowe zadanie ":action" dla harmonogramu :name',
            'update' => 'Zaktualizowano zadanie ":action" dla harmonogramu :name',
            'delete' => 'Usunięto zadanie dla harmonogramu :name',
        ],
        'settings' => [
            'rename' => 'Zmieniono nazwę serwera z :old na :new',
            'description' => 'Zmieniono opis serwera z :old na :new',
        ],
        'startup' => [
            'edit' => 'Zmieniono zmienną :variable z ":old" na ":new"',
            'image' => 'Zaktualizowano obraz Docker dla serwera z :old na :new',
        ],
        'subuser' => [
            'create' => 'Dodano :email jako podużytkownika',
            'update' => 'Zaktualizowano uprawnienia podużytkownika dla :email',
            'delete' => 'Usunięto :email jako podużytkownika',
        ],
    ],
];