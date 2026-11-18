<?php

return [
    'navigation_label' => 'Məlumatların saxlanması',
    'resource' => [
        'label' => 'Anonimləşdirilmiş sütun',
        'plural_label' => 'Anonimləşdirilmiş sütunlar',
    ],

    'fields' => [
        'model' => 'Model',
        'record' => 'Qeyd',
        'column' => 'Sütun',
        'created_at' => 'Anonimləşdirilib',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Önizləmə',
            'success' => 'İndi :count qeyd anonimləşdiriləcək.',
        ],
        'apply' => [
            'label' => 'Saxlamanı tətbiq et',
            'description' => 'Saxlama müddəti bitmiş bütün sütunları anonimləşdirir. Geri qaytarıla bilməz.',
            'success' => ':count qeyd anonimləşdirildi.',
        ],
        'reapply' => [
            'label' => 'Ehtiyat nüsxədən sonra yenidən tətbiq et',
            'description' => 'Bərpa edilmiş ehtiyat nüsxənin geri gətirdiyi sütunları yenidən anonimləşdirir.',
            'success' => ':count sütun yenidən anonimləşdirildi.',
        ],
    ],
];
