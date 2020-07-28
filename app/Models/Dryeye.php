<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dryeye extends Model
{
    const CREATED_AT = 'create_time';

    const UPDATED_AT = 'update_time';
    protected $table = 'ya_dryeye';

    protected $guarded = [];

    protected $dateFormat = 'U';
    protected $dates = [

        'create_time', 'update_time',
    ];
    protected $casts = [
        'diet' => 'array',
        'disease' => 'array',
        'referral' => 'array',
        'survey' => 'array',
    ];


    const DISEASE = [
        1 => '高血压',
        2 => '心脏病',
        3 => '糖尿病',
        4 => '免疫系统疾病',
        5 => '青光眼',
        6 => '近视手术',
        7 => '长期佩戴隐形眼镜',
    ];

    const DIET = [
        1 => '新鲜菜果',
        2 => '胡萝卜',
        3 => '肉蛋奶',
        4 => '鱼类',
        5 => '粗粮',
        6 => '多食甜食',
        7 => '饮料',
        8 => '油炸食品',
        9 => '零食',
        10 => '是否爱食辣',
        11 => '是否吃保健品',
    ];

    const QUESTIONS = [
        '是否有全身性疾病？甲状腺疾病 免疫系统疾病 如：类风湿性关节炎 糖尿病等',
        '是否有眼部疾病或过敏性眼病',
        '是否做过屈光手术或眼部其它手术',
        '是否连续使用电子产品超过两小时',
        '是否长期服用降压药或安定剂类药物',
        '是否长期处在空调或灰尘大的环境中',
        '是否经常睡眠不良或熬夜',
        '是否经常自行使用眼药水',
        '是否长期佩戴隐形眼镜',
        '是否有眼部干涩或异物感',
        '是否有眼部烧灼感或针刺感',
        '是否有经常性眼痒 流泪现象',
        '是否有眼红 视物模糊现象',
        '是否有畏光 视力波动现象',
        '是否眼部经常性胀痛 视疲劳现象',

    ];

    const HEIGHT = [
        1 => '小于0.3mm',
        2 => '0.3-0.5mm',
        3 => '大于0.5mm',
    ];

}
