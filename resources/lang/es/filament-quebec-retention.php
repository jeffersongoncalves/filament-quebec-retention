<?php

return [
    'navigation_label' => 'Retención de datos',
    'resource' => [
        'label' => 'Columna anonimizada',
        'plural_label' => 'Columnas anonimizadas',
    ],

    'fields' => [
        'model' => 'Modelo',
        'record' => 'Registro',
        'column' => 'Columna',
        'created_at' => 'Anonimizada el',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Simular',
            'success' => 'Se anonimizarían :count registro(s) ahora.',
        ],
        'apply' => [
            'label' => 'Aplicar retención',
            'description' => 'Anonimiza cada columna cuyo plazo de retención terminó. No se puede deshacer.',
            'success' => ':count registro(s) anonimizado(s).',
        ],
        'reapply' => [
            'label' => 'Reaplicar tras backup',
            'description' => 'Vuelve a anonimizar las columnas que trajo de vuelta un backup restaurado.',
            'success' => ':count columna(s) anonimizada(s) de nuevo.',
        ],
    ],
];
