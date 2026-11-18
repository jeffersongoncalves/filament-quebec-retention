<?php

return [
    'navigation_label' => 'Veri saklama',
    'resource' => [
        'label' => 'Anonimleştirilmiş sütun',
        'plural_label' => 'Anonimleştirilmiş sütunlar',
    ],

    'fields' => [
        'model' => 'Model',
        'record' => 'Kayıt',
        'column' => 'Sütun',
        'created_at' => 'Anonimleştirilme',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Önizleme',
            'success' => 'Şu anda :count kayıt anonimleştirilecek.',
        ],
        'apply' => [
            'label' => 'Saklamayı uygula',
            'description' => 'Saklama süresi dolan tüm sütunları anonimleştirir. Geri alınamaz.',
            'success' => ':count kayıt anonimleştirildi.',
        ],
        'reapply' => [
            'label' => 'Yedekten sonra yeniden uygula',
            'description' => 'Geri yüklenen bir yedeğin geri getirdiği sütunları yeniden anonimleştirir.',
            'success' => ':count sütun yeniden anonimleştirildi.',
        ],
    ],
];
