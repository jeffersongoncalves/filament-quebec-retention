<?php

return [
    'navigation_label' => 'Conservazione dei dati',
    'resource' => [
        'label' => 'Colonna anonimizzata',
        'plural_label' => 'Colonne anonimizzate',
    ],

    'fields' => [
        'model' => 'Modello',
        'record' => 'Record',
        'column' => 'Colonna',
        'created_at' => 'Anonimizzata il',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Anteprima',
            'success' => ':count record verrebbero anonimizzati ora.',
        ],
        'apply' => [
            'label' => 'Applica conservazione',
            'description' => 'Anonimizza ogni colonna il cui periodo di conservazione è terminato. Non può essere annullato.',
            'success' => ':count record anonimizzati.',
        ],
        'reapply' => [
            'label' => 'Riapplica dopo il backup',
            'description' => 'Anonimizza di nuovo le colonne riportate da un backup ripristinato.',
            'success' => ':count colonna/e anonimizzata/e di nuovo.',
        ],
    ],
];
