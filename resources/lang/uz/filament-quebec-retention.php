<?php

return [
    'navigation_label' => 'Ma\'lumotlarni saqlash',
    'resource' => [
        'label' => 'Anonimlashtirilgan ustun',
        'plural_label' => 'Anonimlashtirilgan ustunlar',
    ],

    'fields' => [
        'model' => 'Model',
        'record' => 'Yozuv',
        'column' => 'Ustun',
        'created_at' => 'Anonimlashtirilgan',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Oldindan ko\'rish',
            'success' => 'Hozir :count ta yozuv anonimlashtiriladi.',
        ],
        'apply' => [
            'label' => 'Saqlashni qo\'llash',
            'description' => 'Saqlash muddati tugagan har bir ustunni anonimlashtiradi. Bekor qilib bo\'lmaydi.',
            'success' => ':count ta yozuv anonimlashtirildi.',
        ],
        'reapply' => [
            'label' => 'Zaxiradan keyin qayta qo\'llash',
            'description' => 'Tiklangan zaxira nusxa qaytargan ustunlarni qayta anonimlashtiradi.',
            'success' => ':count ta ustun qayta anonimlashtirildi.',
        ],
    ],
];
