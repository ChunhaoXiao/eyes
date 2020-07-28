<?php

use Illuminate\Database\Seeder;
use App\Models\CustomerItem;

class CustomerItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerItem::truncate();
        //exit;
        $data = [
            'identity' => 'history',
            'name' => '眼科病史',
        ];

        $row = CustomerItem::firstOrCreate(['identity' => $data['identity']], ['name' => $data['name']]);

        $section = $row->items()->create(
            [
                'identity' => 'section_jws',
                'name' => '既往史',
                'type' => 'section',
            ]
        );
        $section->items()->createMany([
            [
                'identity' => 'zs',
                'name' => '主诉',
                'type' => 'field',
            ],
            [
                
                'identity' => 'jws1',
                'name' => '既往史',
                'type' => 'field',
            ],
            [
                
                'identity' => 'jzs',
                'name' => '家族史',
                'type' => 'field',
            ],
            [
                'identity' => 'jws',
                'name' => '视力',
                'type' => 'field'
            ],
            [
                'identity' => 'gms',
                'name' => '过敏史',
                'type' => 'field',
            ],
            [
                'identity' => 'over_yj_time',
                'name' => '多长时间换一次镜',
                'type' => 'field',
            ],
            
            [
                'identity' => 'pj_count',
                'name' => '配几幅',
                'type' => 'field',
            ],
            [
                'identity' => 'eye_group',
                'name' => '目前配镜度数',
                'type' => 'group',
            ],
            [
                'identity' => 'left_eye',
                'name' => '左眼',
                'type' => 'field',
            ],

            [
                'identity' => 'right_eye',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'pjsj',
                'name' => '最近一次配镜时间',
                'type' => 'field',
            ],
            [
                'identity' => 'ywff',
                'name' => '以往采用的矫治方法',
                'type' => 'field',
            ],
            
        ]);

        $section = $row->items()->create([
            'identity' => 'section_diet',
            'name' => '饮食习惯',
            'type' => 'section',
        ]);

        $section = $row->items()->create([
            'identity' => 'section_usage',
            'name' => '用眼习惯',
            'type' => 'section',
        ]);
        $section->items()->createMany([
            [
                'identity' => 'night_study_time',
                'name' => '每晚学校用时间',
                'type' => 'field'
            ],
            [
                'identity' => 'use_eye_two_time',
                'name' => '两次用眼间隔时间',
                'type' => 'field'
            ],
            [
                'identity' => 'see_book_size',
                'name' => '读书距离',
                'type' => 'field'
            ],
            [
                'identity' => 'yub',
                'name' => '业余班有',
                'type' => 'field'
            ],
            [
                'identity' => 'see_view',
                'name' => '每周用电脑时长',
                'type' => 'field'
            ],
           
            [
                'identity' => 'mygn',
                'name' => '免疫功能',
                'type' => 'field'
            ],
            [
                'identity' => 'wszk',
                'name' => '卫生状况',
                'type' => 'field'
            ],
            [
                'identity' => 'yccx',
                'name' => '依从性',
                'type' => 'field'
            ],
            
        ]);


        $data = [
            'identity' => 'check',
            'name' => '眼科检查',
        ];

        $row = CustomerItem::firstOrCreate(['identity' => $data['identity']], ['name' => $data['name']]);
        $section = $row->items()->create([
            'identity' => 'section_shili',
            'name' => '视力',
            'type' => 'section',
        ]);
        $section->items()->createMany([
            [
                'identity' => 'luoyan_group',
                'name' => '裸眼',
                'type' => 'group'
            ],
            [
                'identity' => 'sl_ly_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'sl_ly_l',
                'name' => '左眼',
                'type' => 'field',
            ],

            [
                'identity' => 'ywh_group',
                'name' => '云雾后',
                'type' => 'group'
            ],
            [
                'identity' => 'sl_ywh_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'sl_ywh_l',
                'name' => '左眼',
                'type' => 'field',
            ],

            [
                'identity' => 'xjjz_group',
                'name' => '现镜矫正',
                'type' => 'group'
            ],
            [
                'identity' => 'sl_xjjz_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'sl_xjjz_l',
                'name' => '左眼',
                'type' => 'field',
            ],

        ]);

        $section = $row->items()->create([
            'identity' => 'section_waiyan',
            'name' => '外眼',
            'type' => 'section',
        ]);
        $section->items()->createMany([
            [
                'identity' => 'yanjian_group',
                'name' => '眼睑',
                'type' => 'group',
            ],
            [
                'identity' => 'sl_wy_yl_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'sl_wy_yl_l',
                'name' => '左眼',
                'type' => 'field',
            ],
            [
                'identity' => 'jiemo_group',
                'name' => '结膜',
                'type' => 'group',
            ],
            [
                'identity' => 'sl_wy_jm_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'sl_wy_jm_l',
                'name' => '左眼',
                'type' => 'field',
            ]
        ]);

        $section = $row->items()->create([
            'identity' => 'section_yanwei',
            'name' => '眼位'
        ]);
        $section->items()->createMany([
            [
                'identity' => 'yw_r',
                'name' => '右眼',
                'type' => 'field'
            ],
            [
                'identity' => 'yw_l',
                'name' => '左眼',
                'type' => 'field'
            ]
        ]);

        $section = $row->items()->create([
            'identity' => 'section_sysgn',
            'name' => '双眼视功能'
        ]);

        $section->items()->createMany([
            [
                'identity' => 'jc_sygn_nra',
                'name' => 'NRA',
                'type' => ''
            ],
            [
                'identity' => 'jc_sygn_pra',
                'name' => 'PRA',
                'type' => ''
            ],
            [
                'identity' => 'jc_sygn_bcc',
                'name' => 'BCC',
                'type' => ''
            ],
            [
                'identity' => 'amp_group',
                'name' => 'AMP',
                'type' => 'group'
            ],
            [
                'identity' => 'jc_sygn_amp_r',
                'name' => '右眼',
                'type' => 'field'
            ],
            [
                'identity' => 'jc_sygn_amp_l',
                'name' => '左眼',
                'type' => 'field'
            ],
            [
                'identity' => 'jc_sygn_amp_c',
                'name' => '双眼',
                'type' => 'field'
            ],
            [
                'identity' => 'jc_sygn_ac_a',
                'name' => 'AC/A',
                'type' => 'field'
            ],
            [
                'identity' => 'jc_sygn_af',
                'name' => 'AF',
                'type' => 'field'
            ],
            [
                'identity' => 'jc_result',
                'name' => '结论',
                'type' => 'field'
            ],
            // [
            //     'identity' => '',
            //     'name' => '',
            //     'type' => ''
            // ],

        ]);

        $section = $row->items()->create([
            'identity' => 'section_qgjz',
            'name' => '屈光间质',
        ]);

        $section->items()->createMany([
            [
                'identity' => 'jiaomo_group',
                'name' => '角膜',
                'type' => 'group',
            ],
            [
                'identity' => 'qjgz_jm_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'qjgz_jm_l',
                'name' => '左眼',
                'type' => 'field',
            ],
            [
                'identity' => 'jmzj_group',
                'name' => '角膜直径',
                'type' => 'group',
            ],
            [
                'identity' => 'qjgz_jmzj_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'qjgz_jmzj_l',
                'name' => '左眼',
                'type' => 'field',
            ],
            [
                'identity' => 'tkzj_group',
                'name' => '瞳孔直径',
                'type' => 'group',
            ],
            [
                'identity' => 'qjgz_tkzj_r_mg',
                'name' => '右眼明光',
                'type' => '',
            ],
            [
                'identity' => 'qjgz_tkzj_l_mg',
                'name' => '左眼明光',
                'type' => '',
            ],
            [
                'identity' => 'qjgz_tkzj_r_ag',
                'name' => '右眼暗光',
                'type' => '',
            ],
            [
                'identity' => 'qjgz_tkzj_l_ag',
                'name' => '左眼暗光',
                'type' => '',
            ],
            
            [
                'identity' => 'fangshui_group',
                'name' => '房水',
                'type' => 'group',
            ],
            [
                'identity' => 'qjgz_fs_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'qjgz_fs_l',
                'name' => '左眼',
                'type' => 'field',
            ],
            [
                'identity' => 'jingti_group',
                'name' => '晶体',
                'type' => 'group',
            ],
            [
                'identity' => 'qjgz_jt_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'qjgz_jt_l',
                'name' => '左眼',
                'type' => 'field',
            ],
            [
                'identity' => 'blt_group',
                'name' => '玻璃体',
                'type' => 'group',
            ],
            [
                'identity' => 'qjgz_blt_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'qjgz_blt_l',
                'name' => '左眼',
                'type' => 'field',
            ],
        ]);

        $section = $row->items()->create([
            'identity' => 'section_yandi',
            'name' => '眼底',
        ]);
        $section->items()->createMany([
            [
                'identity' => 'xueguan_group',
                'name' => '血管',
                'type' => 'group',
            ],
            [
                'identity' => 'yd_xg_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'yd_xg_l',
                'name' => '左眼',
                'type' => 'field',
            ],
            [
                'identity' => 'srt_group',
                'name' => '视乳头',
                'type' => 'group',
            ],
            [
                'identity' => 'yd_srt_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'yd_srt_l',
                'name' => '左眼',
                'type' => 'field',
            ],
            [
                'identity' => 'swm_group',
                'name' => '视网膜',
                'type' => 'group',
            ],
            [
                'identity' => 'yd_swn_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'yd_swn_l',
                'name' => '左眼',
                'type' => 'field',
            ],
            [
                'identity' => 'hb_group',
                'name' => '黄斑',
                'type' => 'group',
            ],
            [
                'identity' => 'yd_hb_r',
                'name' => '右眼',
                'type' => 'field',
            ],
            [
                'identity' => 'yd_hb_l',
                'name' => '左眼',
                'type' => 'field',
            ],
        ]);
    }
}
