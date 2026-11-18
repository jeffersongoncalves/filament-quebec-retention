<?php

return [
    'navigation_label' => 'Conservation des données',
    'resource' => [
        'label' => 'Colonne anonymisée',
        'plural_label' => 'Colonnes anonymisées',
    ],

    'fields' => [
        'model' => 'Modèle',
        'record' => 'Enregistrement',
        'column' => 'Colonne',
        'created_at' => 'Anonymisée le',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Aperçu',
            'success' => ':count enregistrement(s) seraient anonymisés maintenant.',
        ],
        'apply' => [
            'label' => 'Appliquer la conservation',
            'description' => 'Anonymise chaque colonne dont la durée de conservation a pris fin. Action irréversible.',
            'success' => ':count enregistrement(s) anonymisé(s).',
        ],
        'reapply' => [
            'label' => 'Réappliquer après sauvegarde',
            'description' => 'Anonymise à nouveau les colonnes qu\'une sauvegarde restaurée a ramenées.',
            'success' => ':count colonne(s) anonymisée(s) à nouveau.',
        ],
    ],
];
