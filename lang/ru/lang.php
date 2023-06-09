<?php

return [
    'details' => [
        'name' => 'Локации',
        'description' => 'Простая система для управления локациями компании',
    ],
    'location' => [
        'id' => 'ID',
        'name' => 'Название',
        'slug' => 'URL',
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
        'meta_title' => 'Title',
        'meta_description' => 'Description',
        'meta_keywords' => 'Keywords',
        'contacts_tab' => 'Контакты',
        'seo_tab' => 'SEO',
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
        'locations' => 'Локации',
        'created_at' => 'Создано',
        'updated_at' => 'Обновлено',
        'breadcrumb' => 'Телефоны',
        'breadcrumb_create' => 'Создание телефона',
        'breadcrumb_preview' => 'Просмотр телефона',
        'breadcrumb_update' => 'Обновление телефона',
        'breadcrumb_reorder' => 'Сортировка телефонов',
        'breadcrumb_index' => 'Телефоны',
    ],
    'detail' => [
        'name' => 'Реквизиты',
        'pages' => [
            'index' => [
                'title' => 'Реквизиты',
                'breadcrumb' => 'Реквизиты',
            ],
            'preview' => [
                'title' => 'Просмотр реквизита',
                'breadcrumb' => 'Просмотр реквизита',
            ],
            'create' => [
                'title' => 'Создание реквизита',
                'breadcrumb' => 'Создание реквизита',
            ],
            'update' => [
                'title' => 'Обновление реквизита',
                'breadcrumb' => 'Обновление реквизита',
            ],
            'reorder' => [
                'title' => 'Сортировка реквизитов',
                'breadcrumb' => 'Сортировка реквизитов',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Название',
                'placeholder' => 'Название компании',
            ],
            'value' => [
                'label' => 'Значение',
                'placeholder' => 'ООО «Компания»',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обнавлено',
            ],
        ],
    ],
    'components' => [
        'details' => [
            'name' => 'Реквизиты',
            'description' => 'Отображает реквизиты компании',
        ],
        'locations' => [
            'name' => 'Локации',
            'description' => 'Отображает локации компании',
        ],
        'location' => [
            'name' => 'Локация',
            'description' => 'Отображает локацию',
            'properties' => [
                'slug' => [
                    'title' => 'Параметр URL',
                    'description' => 'Параметр URL, необходимый для выбора конкретной записи',
                ],
            ],
        ],
        'phones' => [
            'name' => 'Телефоны',
            'description' => 'Отображает телефоны компании',
        ],
        'location_settings' => [
            'name' => 'Настройки локации',
            'description' => 'Выводит настройки главной локации',
        ],
        'page_settings' => [
            'name' => 'Настройки страницы контактов',
            'description' => 'Выводит настройки страницы контактов',
        ],
    ],
    'settings' => [
        'location' => [
            'label' => 'Главная локация',
            'description' => 'Изменение контактной информации главной локации',
            'category' => 'Содержание',
            'keywords' => 'локация, контакты',
            'fields' => [
                'logo' => [
                    'label' => 'Логотип',
                    'comment' => 'Логотип компании',
                ],
                'favicon' => [
                    'label' => 'Favicon',
                    'comment' => 'Favicon компании (256x256px)',
                ],
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
        'page' => [
            'label' => 'Настройки страницы',
            'description' => 'Изменение главной страницы контактов',
            'category' => 'Содержание',
            'keywords' => 'страница, контакты',
            'fields' => [
                'image' => [
                    'label' => 'Изображение',
                    'comment' => 'Для главной страницы контактов',
                ],
                'heading' => [
                    'label' => 'Заголовок',
                    'placeholder' => 'Контакты',
                ],
                'description' => [
                    'label' => 'Описание',
                    'placeholder' => 'Наши контакты и локации',
                ],
                'meta_title' => [
                    'label' => 'Title',
                    'placeholder' => 'Контакты',
                ],
                'meta_description' => [
                    'label' => 'Description',
                    'placeholder' => 'Наши контакты и локации.',
                ],
                'meta_keywords' => [
                    'label' => 'Keywords',
                    'placeholder' => 'контакты',
                ],
            ],
        ],
    ],
];
