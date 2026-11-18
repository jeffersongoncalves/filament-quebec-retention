<?php

return [
    'navigation_label' => '数据保留',
    'resource' => [
        'label' => '已匿名化的列',
        'plural_label' => '已匿名化的列',
    ],

    'fields' => [
        'model' => '模型',
        'record' => '记录',
        'column' => '列',
        'created_at' => '匿名化时间',
    ],

    'actions' => [
        'preview' => [
            'label' => '预览',
            'success' => '现在将匿名化 :count 条记录。',
        ],
        'apply' => [
            'label' => '执行保留策略',
            'description' => '匿名化所有保留期已结束的列。此操作无法撤销。',
            'success' => '已匿名化 :count 条记录。',
        ],
        'reapply' => [
            'label' => '备份恢复后重新执行',
            'description' => '重新匿名化已恢复备份带回的列。',
            'success' => '已重新匿名化 :count 列。',
        ],
    ],
];
