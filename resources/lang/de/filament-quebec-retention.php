<?php

return [
    'navigation_label' => 'Datenaufbewahrung',
    'resource' => [
        'label' => 'Anonymisierte Spalte',
        'plural_label' => 'Anonymisierte Spalten',
    ],

    'fields' => [
        'model' => 'Modell',
        'record' => 'Datensatz',
        'column' => 'Spalte',
        'created_at' => 'Anonymisiert am',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Vorschau',
            'success' => ':count Datensatz/Datensätze würden jetzt anonymisiert.',
        ],
        'apply' => [
            'label' => 'Aufbewahrung anwenden',
            'description' => 'Anonymisiert jede Spalte, deren Aufbewahrungsfrist abgelaufen ist. Dies kann nicht rückgängig gemacht werden.',
            'success' => ':count Datensatz/Datensätze anonymisiert.',
        ],
        'reapply' => [
            'label' => 'Nach Backup erneut anwenden',
            'description' => 'Anonymisiert die Spalten erneut, die ein wiederhergestelltes Backup zurückgebracht hat.',
            'success' => ':count Spalte(n) erneut anonymisiert.',
        ],
    ],
];
