<?php
return [ 
    'gateways' => [  
        'aliyun' => [ 
            'access_key_id' => env('ALIYUN_API_KEY'),
            'access_key_secret' => env('ALIYUN_API_KEY_SECRET'),
            'sign_name' => env('SIGN_NAME'),
        ],
    ],
];