<?php

return [
    'columns' => [
        'employees_name' => 'nickname',
        'employees_prefix' => 'prefix',
        'employees_last_name' => 'last_name',
        'employees_gender' => 'gender',
        'employees_phone_number' => 'phone_number',
        'employees_date_of_birth' => 'date_of_birth',
    ],
    'ajax' => [
        'columns' => [
            [
                'data' => 'nickname',
                'column' => 'nickname',
            ],
            [
                'data' => 'prefix',
                'column' => 'prefix',
            ],
            [
                'data' => 'last_name',
                'column' => 'last_name',
            ],
            [
                'data' => 'gender',
                'column' => 'gender',
            ],
            [
                'data' => 'phone_number',
                'column' => 'phone_number',
            ],
            [
                'data' => 'date_of_birth',
                'column' => 'date_of_birth',
            ],
        ],
        'url' => 'employees.data',
    ],
];