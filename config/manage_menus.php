<?php
return [
    [
        'text' => '管理员',
        'prefix' => 'manager',
        'submenus' => [
            [
                'text' => '管理员管理',
                'url' => 'manager',
            ],
            [
                'text' => '角色管理',
                'url' => 'roles',
            ],
        ]
    ],

    [
        'text' => '分店管理',
        'prefix' => 'shop',
        'submenus' => [
            [
                'text' => '分店区域管理',
                'url' => 'areas',
            ],
            [
                'text' => '分店管理',
                'url' => 'shops',
            ]
        ]
    ],

    [
        'text' => '客户管理',
        'url' => 'users',
    ],
    [
        'text' => '项目管理',
        'prefix' => 'project',
        'submenus' => [
            [
                'text' => '角膜接触角品牌',
                'url' => 'corneal/brand',
                'model' => App\Models\Brand::class,
                'type' => 'corneal',
            ],
            [
                'text' => '镜架品牌',
                'url' => 'glass/brand',
                'model' => App\Models\Brand::class,
                'type' => 'glass',
            ],
            [
                'text' => '镜片品牌',
                'url' => 'jingpian/brand',
                'model' => App\Models\Brand::class,
                'type' => 'jingpian',
            ],
            [
                'text' => '学校管理',
                'url' => 'school',
                'model' => App\Models\School::class,
            ],
            [
                'text' => '消费类型',
                'url' => 'consumption/category',
                'model' => App\Models\Category::class,
                'type' => 'consumption',
            ],
            [
                'text' => '商品类型',
                'url' => 'prod/category',
                'model' => App\Models\Category::class,
                'type' => 'prod',
            ],
            [
                'text' => '疾病类型',
                'url' => 'disease/category',
                'model' => App\Models\Category::class,
                'type' => 'disease',
            ],
            [
                'text' => '卡类型',
                'url' => 'card/category',
                'model' => App\Models\Category::class,
                'type' => 'card',
            ],
            [
                'text' => '客户来源',
                'url' => 'src/category',
                'model' => App\Models\Category::class,
                'type' => 'src'
            ]
        ]
    ],

    [
        'text' => '预约管理',
        'prefix' => 'subscribe',
        'submenus' => [
            [
                'text' => '预约信息',
                'url' => 'appointment',
            ],
            [
                'text' => '用户预约列表',
                'url' => 'reservation',
            ],
        ]
    ],
    [
        'text' => '医生管理',
        'url' => 'doctors',
    ],
    [
        'text' => '系统设置',
        'prefix' => 'setting',
        'submenus' => [
            [
                'text' => 'Banner管理',
                'url' => 'banner',
                'model' => App\Models\Banner::class,
            ],
            [
                'text' => '网站导航',
                'url' => '',
                'model' => '',
            ],
            [
                'text' => '首页中间导航',
                'url' => '',
                'model' => '',
            ],
            [
                'text' => '底部导航',
                'url' => '',
                'model' => '',
            ]
        ]
    ],
];