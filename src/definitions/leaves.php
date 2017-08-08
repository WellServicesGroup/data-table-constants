<?php

return [
    'columns' => [
        'leaves_employee' => 'employee',
        'leaves_from' => 'from',
        'leaves_to' => 'to',
        'leaves_type' => 'type',
        'leaves_status' => 'status',
        'leaves_comment' => 'comment',
    ],
    'ajax' => [
        'columns' => [
            [
                'data' => 'employee',
                'column' => 'employee',
            ],
            [
                'data' => 'from',
                'column' => 'from',
            ],
            [
                'data' => 'to',
                'column' => 'to',
            ],
            [
                'data' => 'type',
                'column' => 'type',
            ],
            [
                'data' => 'status',
                'column' => 'status',
            ],
            [
                'data' => 'comment',
                'column' => 'comment',
            ],
        ],
        'url' => 'leaves.data',
    ],
    'order' => [
        [
            2,
            'desc',
        ],
    ],
];