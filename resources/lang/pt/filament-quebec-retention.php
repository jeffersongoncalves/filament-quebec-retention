<?php

return [
    'navigation_label' => 'Retenção de dados',
    'resource' => [
        'label' => 'Coluna anonimizada',
        'plural_label' => 'Colunas anonimizadas',
    ],

    'fields' => [
        'model' => 'Modelo',
        'record' => 'Registo',
        'column' => 'Coluna',
        'created_at' => 'Anonimizada em',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Simular',
            'success' => ':count registo(s) seriam anonimizados agora.',
        ],
        'apply' => [
            'label' => 'Aplicar retenção',
            'description' => 'Anonimiza todas as colunas cujo prazo de retenção terminou. Não é possível anular.',
            'success' => ':count registo(s) anonimizado(s).',
        ],
        'reapply' => [
            'label' => 'Reaplicar após cópia de segurança',
            'description' => 'Anonimiza novamente as colunas que uma cópia de segurança restaurada trouxe de volta.',
            'success' => ':count coluna(s) anonimizada(s) novamente.',
        ],
    ],
];
