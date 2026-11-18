<?php

return [
    'navigation_label' => 'Przechowywanie danych',
    'resource' => [
        'label' => 'Zanonimizowana kolumna',
        'plural_label' => 'Zanonimizowane kolumny',
    ],

    'fields' => [
        'model' => 'Model',
        'record' => 'Rekord',
        'column' => 'Kolumna',
        'created_at' => 'Zanonimizowano',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Podgląd',
            'success' => 'Teraz zostałoby zanonimizowanych rekordów: :count.',
        ],
        'apply' => [
            'label' => 'Zastosuj retencję',
            'description' => 'Anonimizuje każdą kolumnę, której okres przechowywania minął. Tej operacji nie można cofnąć.',
            'success' => 'Zanonimizowano rekordów: :count.',
        ],
        'reapply' => [
            'label' => 'Zastosuj ponownie po kopii zapasowej',
            'description' => 'Ponownie anonimizuje kolumny przywrócone z kopii zapasowej.',
            'success' => 'Ponownie zanonimizowano kolumn: :count.',
        ],
    ],
];
