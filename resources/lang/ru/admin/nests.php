<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Гнездо с названием, :name, успешно создано.',
        'deleted' => 'Гнездо успешно удалено.',
        'updated' => 'Гнездо успешно обновлено.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Данное яйцо успешно импортировано и все переменные связанные с ним установлены.',
            'updated_via_import' => 'Данное яйцо успешно обновлено.',
            'deleted' => 'Данное яйцо успешно удалено из панели.',
            'updated' => 'Конфигурация яйца была обновлена.',
            'script_updated' => 'Скрипт установки яйца был обновлен и он будет запущен при перезапуске сервера.',
            'egg_created' => 'Новое яйцо успешно установлено. Вам нужно перезапустить любые запущеные демоны для того чтобы в нём появилось данное яйцо.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Переменная ":variable" успешно удалена.',
            'variable_updated' => 'Переменная ":variable" успешно обновлена. Вам нужно перестроить каждый сервер который использует данную переменную.',
            'variable_created' => 'Новая переменная успешно создана и она применена к данному яйцу.',
        ],
    ],
];
