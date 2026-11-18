<?php

return [
    'navigation_label' => 'データ保持',
    'resource' => [
        'label' => '匿名化された列',
        'plural_label' => '匿名化された列',
    ],

    'fields' => [
        'model' => 'モデル',
        'record' => 'レコード',
        'column' => '列',
        'created_at' => '匿名化日時',
    ],

    'actions' => [
        'preview' => [
            'label' => 'プレビュー',
            'success' => '現在 :count 件のレコードが匿名化されます。',
        ],
        'apply' => [
            'label' => '保持期間を適用',
            'description' => '保持期間が終了したすべての列を匿名化します。元に戻せません。',
            'success' => ':count 件のレコードを匿名化しました。',
        ],
        'reapply' => [
            'label' => 'バックアップ後に再適用',
            'description' => '復元したバックアップで戻った列を再度匿名化します。',
            'success' => ':count 列を再度匿名化しました。',
        ],
    ],
];
