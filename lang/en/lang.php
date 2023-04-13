<?php

return [
    'details' => [
        'name' => 'Locations',
        'description' => 'Easy to use system for managing company locations',
    ],
    'location' => [
        'id' => 'ID',
        'name' => 'Name',
        'slug' => 'URL',
        'description' => 'Description',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'country' => 'Country',
        'region' => 'Region',
        'locality' => 'Locality',
        'street' => 'Street',
        'geo_latitude' => 'Geocode (latitude)',
        'geo_longitude' => 'Geocode (longitude)',
        'postal_code' => 'Postal code',
        'fax' => 'Fax',
        'post_office_box' => 'Post office box',
        'opening_hours' => 'Opening hours',
        'meta_title' => 'Title',
        'meta_description' => 'Description',
        'meta_keywords' => 'Keywords',
        'contacts_tab' => 'Contacts',
        'seo_tab' => 'SEO',
        'breadcrumb' => 'Locations',
        'breadcrumb_create' => 'Create location',
        'breadcrumb_preview' => 'Preview location',
        'breadcrumb_update' => 'Update location',
        'breadcrumb_reorder' => 'Reorder locations',
        'breadcrumb_index' => 'Locations',
    ],
    'phone' => [
        'id' => 'ID',
        'name' => 'Name',
        'number' => 'Phone number',
        'locations' => 'Locations',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'breadcrumb' => 'Phones',
        'breadcrumb_create' => 'Create phone',
        'breadcrumb_preview' => 'Preview phone',
        'breadcrumb_update' => 'Update phone',
        'breadcrumb_reorder' => 'Reorder phones',
        'breadcrumb_index' => 'Phones',
    ],
    'detail' => [
        'name' => 'Details',
        'pages' => [
            'index' => [
                'title' => 'Details',
                'breadcrumb' => 'Details',
            ],
            'preview' => [
                'title' => 'Detail preview',
                'breadcrumb' => 'Detail preview',
            ],
            'create' => [
                'title' => 'Detail create',
                'breadcrumb' => 'Detail create',
            ],
            'update' => [
                'title' => 'Detail update',
                'breadcrumb' => 'Detail update',
            ],
            'reorder' => [
                'title' => 'Details reorder',
                'breadcrumb' => 'Details reorder',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Company name',
            ],
            'value' => [
                'label' => 'Value',
                'placeholder' => 'Company Ltd.',
            ],
            'created_at' => [
                'label' => 'Created at',
            ],
            'updated_at' => [
                'label' => 'Updated at',
            ],
        ],
    ],
    'components' => [
        'details' => [
            'name' => 'Details',
            'description' => 'Displays company details',
        ],
        'locations' => [
            'name' => 'Locations',
            'description' => 'Displays company locations',
        ],
        'location' => [
            'name' => 'Location',
            'description' => 'Displays location',
            'properties' => [
                'slug' => [
                    'title' => 'URL parameter',
                    'description' => 'URL parameter for record',
                ],
            ],
        ],
        'phones' => [
            'name' => 'Phones',
            'description' => 'Displays company phones',
        ],
    ],
    'settings' => [
        'location' => [
            'label' => 'Main location',
            'description' => 'Changing main location`s contacts',
            'category' => 'Content',
            'keywords' => 'location, contacts',
            'fields' => [
                'name' => [
                    'label' => 'Name',
                    'placeholder' => 'Company',
                ],
                'description' => [
                    'label' => 'Description',
                    'placeholder' => 'Description',
                ],
                'phone' => [
                    'label' => 'Phone',
                    'placeholder' => '+1 (400) 000-00-00',
                ],
                'email' => [
                    'label' => 'Email',
                    'placeholder' => 'admin@gmail.com',
                ],
                'country' => [
                    'label' => 'Country',
                    'placeholder' => 'USA',
                ],
                'region' => [
                    'label' => 'Region',
                    'placeholder' => 'New York',
                ],
                'locality' => [
                    'label' => 'Locality',
                    'placeholder' => 'New York City',
                ],
                'street' => [
                    'label' => 'Street',
                    'placeholder' => '20 W 34th St.',
                ],
                'geo_latitude' => [
                    'label' => 'Geocode (latitude)',
                    'placeholder' => '40.7484',
                ],
                'geo_longitude' => [
                    'label' => 'Geocode (longitude)',
                    'placeholder' => '-73.9856',
                ],
                'postal_code' => [
                    'label' => 'Postal code',
                    'placeholder' => '00000',
                ],
                'fax' => [
                    'label' => 'Fax',
                    'placeholder' => '000-000-0000',
                ],
                'post_office_box' => [
                    'label' => 'Post office box',
                    'placeholder' => '567 Honeycomb Rd',
                ],
                'opening_hours' => [
                    'label' => 'Opening hours',
                    'placeholder' => 'Mo-Fr 09:00-18:00',
                ],
            ],
        ],
    ],
];
