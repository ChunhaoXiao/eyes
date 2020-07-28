<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aplastic extends Model
{
    const CREATED_AT = 'create_time';

    const UPDATED_AT = 'update_time';

    protected $table = 'ya_aplastic';

    protected $guarded = [];

    protected $dates = [

        'create_time', 'update_time'
    ];

    protected $dateFormat = 'U';

    const SDP = [
        'jpbm' => '镜片编码',
        'jh' => '基弧',
        'zj' => '直径',
        'mbjd' => '目标焦度',
        'fjd' => '附加度',
    ];

    protected $casts = [
        'zhusu' => 'array',
        'bmzk_r' => 'array',
        'bmzk_l' => 'array',
        'byzk_r' => 'array',
        'byzk_l' => 'array',
        'chuzhi_r' => 'array',
        'chuzhi_l' => 'array',
    ];

    const QUESTIONS = [
        'jpjl_yszj1' => '是否已向用户演示戴镜、摘镜',
        'jpjl_zxcz' => '是否已让用户自行操作戴镜、摘镜',
        'jpjl_jphl' => '是否已向用户示范镜片护理',
        'jpjl_zxczjphl' => '是否已让用户自行操作镜片护理',
        'jpjl_jpys' => '是否已告知用户镜片易碎',
        'jpjl_mkxphl' => '是否已告知用户镜盒吸棒护理方式',
        'jpjl_fc' => '是否已告知用户明晨戴镜复查',
        'jpjl_jp' => '是否已将镜片浸泡',
        'jpjl_phone' => '是否已将热心号码告诉用户',
        'jpjl_yszj' => '是否已告诉用户特别注意',
        'jpjl_sms' => '是否已将说明书交给用户',
        'jpjl_mys' => '是否让用户购买眼药水并告知用法',
    ]; 

    // const ZHUSU = [
    //     'yhzs_zc' => '正常',
    //     'yhzs_cy' => '重影',
    //     'yhzs_ywg' => '异物感',
    //     'yhzs_slbd' => '视力波动',
    //     'yhzs_jpnz' => '镜片难摘',
    //     'yhzs_xy' => '虚影',
    //     'yhzs_yh' => '眼红',
    //     'yhzs_yt' => '眼痛',
    //     'yhzs_fmwzd' => '分泌物增多',
    //     'yhzs_slbj' => '视力不佳',
    // ];
    const ZHUSU = [
        '1' => '正常',
        '2' => '重影',
        '3' => '异物感',
        '4' => '视力波动',
        '5' => '镜片难摘',
        '6' => '虚影',
        '7' => '眼红',
        '8' => '眼痛',
        '9' => '分泌物增多',
        '10' => '视力不佳',
    ];

    const FUCHA = [
        'ybfc_jzx' => '居中性',
        'ybfc_hdd' => '活动度',
        'ybfc_ygyspg' => '荧光染色评估',
        'ybfc_lysl' => '裸眼视力',
        'ybfc_jmsp' => '角膜上皮',
        'ybfc_jm' => '结膜',
        'ybfc_dxt' => '地形图',
        'ybfc_fxyjl' => '分析与结论',
    ];

    const FUCHA_QUESTION = [
        'jmfc_sfytzkhxcfcsj' => '是否已告知用户下次复查时间',
        'jmfc_sfzcgzystbzysx' => '是否再次告知用户特别注意事项',
        'jmfc_sftxyhjsghlcp' => '是否提醒用户及时购护理产品',
        'jmfc_sfgzyhhlikp90tsx' => '是否告知用户护理液开瓶90天失效',
        'jmfc_sfgzyhqpsj' => '如换片或补片，是否告知用户取片时间',
    ];

    // const CHUZHI = [

    //     'jmfc_cz_zc' => '正常',
    //     'jmfc_cz_dm' => '打磨',
    //     'jmfc_cz_cw' => '除污',
    //     'jmfc_cz_hp' => '换片',
    //     'jmfc_cz_tp' => '退片',
    // ];
    const CHUZHI = [

        '1' => '正常',
        '2' => '打磨',
        '3' => '除污',
        '4' => '换片',
        '5' => '退片',
    ];

    // const BIAOMIAN = [
    //     'jmfc_bmzk_zc' => '正常',
    //     'jmfc_bmzk_hh' => '划痕',
    //     'jmfc_bmzk_wr' => '污染',
    //     'jmfc_bmzk_ps' => '破损',
    // ];

    const BIAOMIAN = [
        '1' => '正常',
        '2' => '划痕',
        '3' => '污染',
        '4' => '破损',
    ];

    const BIANYUAN = [
        '1' => '正常',
        '2' => '缺口'
    ];
    const HDDMM = [
        1 => '1.5',
        2 => '1.5-2.5',
        3 => '>2.5'
    ];

    const YGRSPG = [
        1 => '正常', 
        2 => '松', 
        3 => '紧', 
        4 => '水平', 
        5 => '偏位'
    ];

    public function getZsAttribute() {
        $checked = array_flip($this->zhusu);
        return implode('、', array_intersect_key(SELF::ZHUSU, $checked));
    }

    // public function getZhusuAttribute() {
    //     $arr = [];
    //     $datas = SELF::ZHUSU;
    //     foreach($datas as $k => $v) {
    //         if($this->$k) {
    //             $arr[]= $datas[$k];
    //         }
    //     }
    //     return implode('、', $arr);
    // }

    // public function getBmzkrAttribute() {
    //     $checked = [];
    //     $datas = SELF::BIAOMIAN;
    //     foreach($datas as $k => $v) {
    //         if(!empty($this->{$k.'_r'})) {
    //             $checked[] = $datas[$k];
    //         }
    //     }
    //     return implode('、', $checked);
    // }

    // public function  getBmzklAttribute() {
    //     $checked = [];
    //     $datas = SELF::BIAOMIAN;
    //     foreach($datas as $k => $v) {
    //         if(!empty($this->{$k.'_l'})) {
    //             $checked[] = $datas[$k];
    //         }
    //     }
    //     return implode('、', $checked);
    // }

    // public function byzk($type = 'r') {
    //     $datas = [
    //         'jmfc_byzk_zc' => '正常',
    //         'jmfc_byzk_qk' => '缺口'
    //     ];
    //     $checked = [];
    //     foreach($datas as $k => $v) {
    //         if(!empty($this->{$k.'_'.$type})) {
    //             $checked[] = $v;
    //         }
    //     }
    //     return implode('、', $checked);
    // }
}
