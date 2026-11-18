<?php

return [
    'navigation_label' => 'Data retention',

    'resource' => [
        'label' => 'Anonymized column',
        'plural_label' => 'Anonymized columns',
    ],

    'fields' => [
        'model' => 'Model',
        'record' => 'Record',
        'column' => 'Column',
        'created_at' => 'Anonymized at',
    ],

    'actions' => [
        'preview' => [
            'label' => 'Preview',
            'success' => ':count record(s) would be anonymized now.',
        ],
        'apply' => [
            'label' => 'Apply retention',
            'description' => 'Anonymize every column whose retention period has ended. This cannot be undone.',
            'success' => ':count record(s) anonymized.',
        ],
        'reapply' => [
            'label' => 'Re-apply after backup',
            'description' => 'Anonymize again the columns a restored backup brought back.',
            'success' => ':count column(s) anonymized again.',
        ],
    ],
];
