<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Атрибут :attribute должен быть принят.',
    'active_url' => 'Атрибут :attribute не является URL',
    'after' => 'Атрибут :attribute должен быть датой после :date.',
    'after_or_equal' => 'Атрибут :attribute должен быть датой после или равен :date.',
    'alpha' => 'Атрибут :attribute может содержать только буквы.',
    'alpha_dash' => 'Атрибут :attribute может содержать только буквы, цифры и тире.',
    'alpha_num' => 'Атрибут :attribute может содержать только буквы и цифры.',
    'array' => 'Атрибут :attribute должен быть массивом.',
    'before' => 'Атрибут :attribute должен быть датой до :date.',
    'before_or_equal' => 'Атрибут :attribute должен быть датой до или равен :date.',
    'between' => [
        'numeric' => 'Атрибут :attribute должен быть между :min и :max.',
        'file' => 'Атрибут :attribute должен быть между :min и :max килобайт.',
        'string' => 'Атрибут :attribute должен быть между :min и :max символов.',
        'array' => 'Атрибут :attribute должен быть между :min и :max элементами.',
    ],
    'boolean' => 'Атрибут :attribute должен быть в значении true или false.',
    'confirmed' => 'Атрибут :attribute не совпадает при подтверждении.',
    'date' => 'Атрибут :attribute не является валидной датой.',
    'date_format' => 'Атрибут :attribute не соответствует формату :format.',
    'different' => 'Атрибут :attribute и :other должны быть разными.',
    'digits' => 'Атрибут :attribute должен быть :digits цифрой.',
    'digits_between' => 'Атрибут :attribute должен быть между цифрами от :min до :max .',
    'dimensions' => 'Атрибут :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Атрибут :attribute поле имеет повторяющееся значение.',
    'email' => 'Атрибут :attribute Адрес эл. почты должен быть валидным.',
    'exists' => 'Выбранный :attribute невалиден.',
    'file' => 'Атрибут :attribute должен быть файлом.',
    'filled' => 'Атрибут :attribute должен быть заполнен.',
    'image' => 'Атрибут :attribute должен быть картинкой.',
    'in' => 'Выбранный :attribute невалиден.',
    'in_array' => 'Атрибут :attribute field does not exist in :other.',
    'integer' => 'Атрибут :attribute должен быть числом.',
    'ip' => 'Атрибут :attribute должен быть валидным IP-Адресом.',
    'json' => 'Атрибут :attribute должен быть ванильной JSON строкой',
    'max' => [
        'numeric' => 'Атрибут :attribute не может иметь более чем :max.',
        'file' => 'Атрибут :attribute не может иметь более чем :max килобайт.',
        'string' => 'Атрибут :attribute не может иметь более чем :max символов.',
        'array' => 'Атрибут :attribute не может иметь более чем :max элементов.',
    ],
    'mimes' => 'Атрибут :attribute должен быть файл типа: :values.',
    'mimetypes' => 'Атрибут :attribute должен быть файл типа: :values.',
    'min' => [
        'numeric' => 'Атрибут :attribute должен иметь не менее :min.',
        'file' => 'Атрибут :attribute должен иметь не менее :min килобайт.',
        'string' => 'Атрибут :attribute должен иметь не менее :min символов.',
        'array' => 'Атрибут :attribute должен иметь не менее :min элементов.',
    ],
    'not_in' => 'Выбранный :attribute невалиден.',
    'numeric' => 'Атрибут :attribute должен быть числом.',
    'present' => 'Атрибут :attribute поле должно присутствовать.',
    'regex' => 'Атрибут :attribute имеет невалидный формат.',
    'required' => 'Атрибут :attribute поле обязательно.',
    'required_if' => 'Атрибут :attribute поле обязательно, когда :other это :value.',
    'required_unless' => 'Атрибут :attribute поле является обязательным, other: другое не находится в :values.',
    'required_with' => 'Атрибут :attribute поле является обязательным, если присутствует :values.',
    'required_with_all' => 'Атрибут :attribute поле обязательно, когда :values настоящее.',
    'required_without' => 'Атрибут :attribute поле обязательно, когда :values не настоящее.',
    'required_without_all' => 'Атрибут :attribute поле является обязательным, если ни один из :values настоящий.',
    'same' => 'Атрибут :attribute и :other должен совпадать.',
    'size' => [
        'numeric' => 'Атрибут :attribute должен быть :size.',
        'file' => 'Атрибут :attribute должен быть :size килобайт.',
        'string' => 'Атрибут :attribute должен иметь :size символов.',
        'array' => 'Атрибут :attribute должен содержать :size элементов.',
    ],
    'string' => 'Атрибут :attribute должен быть строкой',
    'timezone' => 'Атрибут :attribute должен быть действуюющей зоной.',
    'unique' => 'Атрибут :attribute уже используется',
    'uploaded' => 'Атрибут :attribute не удалось загрузить.',
    'url' => 'Атрибут :attribute формат недействителен.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env переменная',
        'invalid_password' => 'Предоставленный пароль недействителен для этой учетной записи.',
    ],
];
