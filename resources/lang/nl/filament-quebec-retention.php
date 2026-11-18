<?php

return [
    'navigation_label' => 'Gegevensbewaring',
    'resource' => [
        'label' => 'Geanonimiseerde kolom',
        'plural_label' => 'Geanonimiseerde kolommen',
    ],

    'fields' => [
        'model' => 'Model',
        'record' => 'Record',
        'column' => 'Kolom',
        'created_at' => 'Geanonimiseerd op',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Voorbeeld',
            'success' => ':count record(s) zouden nu worden geanonimiseerd.',
        ],
        'apply' => [
            'label' => 'Bewaring toepassen',
            'description' => 'Anonimiseert elke kolom waarvan de bewaartermijn is verstreken. Dit kan niet ongedaan worden gemaakt.',
            'success' => ':count record(s) geanonimiseerd.',
        ],
        'reapply' => [
            'label' => 'Opnieuw toepassen na back-up',
            'description' => 'Anonimiseert opnieuw de kolommen die een teruggezette back-up terugbracht.',
            'success' => ':count kolom(men) opnieuw geanonimiseerd.',
        ],
    ],
];
