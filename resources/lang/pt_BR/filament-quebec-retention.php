<?php

return [
    'navigation_label' => 'Retenção de dados',
    'resource' => [
        'label' => 'Coluna anonimizada',
        'plural_label' => 'Colunas anonimizadas',
    ],

    'fields' => [
        'model' => 'Modelo',
        'record' => 'Registro',
        'column' => 'Coluna',
        'created_at' => 'Anonimizada em',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Simular',
            'success' => ':count registro(s) seriam anonimizados agora.',
        ],
        'apply' => [
            'label' => 'Aplicar retenção',
            'description' => 'Anonimiza todas as colunas cujo prazo de retenção acabou. Não é possível desfazer.',
            'success' => ':count registro(s) anonimizado(s).',
        ],
        'reapply' => [
            'label' => 'Reaplicar após backup',
            'description' => 'Anonimiza de novo as colunas que um backup restaurado trouxe de volta.',
            'success' => ':count coluna(s) anonimizada(s) de novo.',
        ],
    ],
];
