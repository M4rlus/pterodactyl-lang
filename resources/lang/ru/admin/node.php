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
        'fqdn_not_resolvable' => 'Предоставленное доменное имя или IP-Адрес не соответствует нстоящему IP-адресу.',
        'fqdn_required_for_ssl' => 'Для использования SSL нужно использовать доменное имя которое указывает на данный IP-адрес.',
    ],
    'notices' => [
        'allocations_added' => 'Распределения успешно добавлены.',
        'node_deleted' => 'Узел был успешно удален с панели.',
        'location_required' => 'Вам нужно настроить как минимум одно распределение перед тем как добавлять данный узел в панель.',
        'node_created' => 'Узел был успешно создан. Вы можете автоматически настроить демона открыв вкладку \'Configuration\'. <strong>Перед тем как добавлять сервера вы должны добавить хотя бы один IP-адрес и порт для данного узла.</strong>',
        'node_updated' => 'Информация узла успешно изменена. Если вы изменили какие-либо настройки демона, то вам придется перезапустить систему для применения этих настроек.',
        'unallocated_deleted' => 'Убраны все невыделенные порты для <code>:ip</code>.',
    ],
];
