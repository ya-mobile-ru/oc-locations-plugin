<?php

return [
    'details' => [
        'name' => 'Локации',
        'description' => 'Простая система для управления локациями компании',
    ],
    'location' => [
        'id' => 'ID',
        'name' => 'Название',
        'description' => 'Описание',
        'created_at' => 'Создано',
        'updated_at' => 'Обновлено',
        'country' => 'Страна',
        'region' => 'Регион',
        'locality' => 'Населённый пункт',
        'street' => 'Улица',
        'geo_latitude' => 'Geocode (широта)',
        'geo_longitude' => 'Geocode (долгота)',
        'postal_code' => 'Индекс',
        'fax' => 'Факс',
        'post_office_box' => 'Абонентский ящик',
        'opening_hours' => 'Часы работы',
        'contacts_tab' => 'Контакты',
        'breadcrumb' => 'Локации',
        'breadcrumb_create' => 'Создание локации',
        'breadcrumb_preview' => 'Просмотр локации',
        'breadcrumb_update' => 'Обновление локации',
        'breadcrumb_reorder' => 'Сортировка локаций',
        'breadcrumb_index' => 'Локации',
    ],
    'phone' => [
        'id' => 'ID',
        'name' => 'Название',
        'number' => 'Номер телефона',
        'created_at' => 'Создано',
        'updated_at' => 'Обновлено',
        'breadcrumb' => 'Телефоны',
        'breadcrumb_create' => 'Создание телефона',
        'breadcrumb_preview' => 'Просмотр телефона',
        'breadcrumb_update' => 'Обновление телефона',
        'breadcrumb_reorder' => 'Сортировка телефонов',
        'breadcrumb_index' => 'Телефоны',
    ],
    'settings' => [
        'location' => [
            'label' => 'Главная локация',
            'description' => 'Изменение контактной информации главной локации',
            'category' => 'Содержание',
            'keywords' => 'локация, контакты',
            'fields' => [
                'name' => [
                    'label' => 'Название',
                    'placeholder' => 'Компания',
                ],
                'description' => [
                    'label' => 'Описание',
                    'placeholder' => 'Описание',
                ],
                'phone' => [
                    'label' => 'Номер телефона',
                    'placeholder' => '+7 (900) 000-00-00',
                ],
                'email' => [
                    'label' => 'Email',
                    'placeholder' => 'admin@yandex.ru',
                ],
                'country' => [
                    'label' => 'Страна',
                    'placeholder' => 'Россия',
                ],
                'region' => [
                    'label' => 'Регион',
                    'placeholder' => 'Московская область',
                ],
                'locality' => [
                    'label' => 'Населённый пункт',
                    'placeholder' => 'Москва',
                ],
                'street' => [
                    'label' => 'Улица',
                    'placeholder' => 'Красная площадь',
                ],
                'geo_latitude' => [
                    'label' => 'Geocode (широта)',
                    'placeholder' => '37.621682',
                ],
                'geo_longitude' => [
                    'label' => 'Geocode (долгота)',
                    'placeholder' => '55.753286',
                ],
                'postal_code' => [
                    'label' => 'Индекс',
                    'placeholder' => '000000',
                ],
                'fax' => [
                    'label' => 'Факс',
                    'placeholder' => '000-000-0000',
                ],
                'post_office_box' => [
                    'label' => 'Абонентский ящик',
                    'placeholder' => '000000, г. Москва, а/я 0',
                ],
                'opening_hours' => [
                    'label' => 'Часы работы',
                    'placeholder' => 'Пн-Пт 09:00-18:00',
                ],
            ],
        ],
    ],
];
