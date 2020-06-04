<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $table = 'ya_check';

    protected $guarded = ['picture'];

    protected $dates = [

        'create_time', 'update_time', 'add_time'
    ];

    protected $casts = [
        'map' => 'array',
        'yandi' => 'array',
        'shengwu' => 'array',
        'fuzhen' => 'array',
    ];

    protected $dateFormat = 'U';

    const ZSXZ = [
        'zxa' => '中心凹',
        'pzx' => '旁中心',
        'hb' => '黄斑',
        'hbp' => '黄斑旁',
        'zb' => '周边',
    ];

    const SWCL = [
        'swcl_jmhd' => '角膜厚度',
        'swcl_qfsd' => '前房深度',
        'swcl_tgzj' => '瞳孔直径',
        'swcl_jmzj' => '角膜直径',
        'swcl_blt' => '玻璃体',
        'swcl_yzcd' => '眼轴长度',
    ];

    const QGJZ = [
        'qjgz_jm' => '角膜',
        'qjgz_jmzj' => '角膜直径',
        'qjgz_tkzj' => [
            'text' => '瞳孔直径',
            'field' => 'qjgz_tkzj',
            'data' => [
                'mg' => '明光',
                'ag' => '暗光',
            ]
        ],
        'qjgz_fs' => '房水',
        'qjgz_jt' => '晶体',
        'qjgz_blt' => '玻璃体',
    ];
}
