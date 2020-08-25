<?php

use Illuminate\Database\Seeder;
use App\Models\PageSection;

class PageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
        	[
        		'name' => '眼科病史',
        		'identity' => 'history',
        		'is_display' => 1,
        		'sections' => [
        			[
        				'name' => '既往史',
        				'identity' => 'history_past',
        				'is_display' => 1,
        			],
        			[
 						'name' => '饮食习惯',
 						'identity' => 'history_diet',
 						'is_display' => 1
        			],
        			[
        				'name' => '用眼习惯',
        				'identity' => 'history_usage',
        				'is_display' => 1
        			],
        		]
        	],
        	[
        		'name' => '眼科检查',
        		'identity' => 'check',
        		'is_display' => 1,
        		'sections' => [
        			[
        				'name' => '视力',
        				'identity' => 'check_shili',
        			],
        			[
        				'name' => '外眼',
        				'identity' => 'check_waiyan',
        			],
        			[
        				'name' => '眼位',
        				'identity' => 'check_yanwei',
        			],
        			[
        				'name' => '双眼视功能',
        				'identity' => 'check_sng',
        			],
        			[
        				'name' => '屈光间质',
        				'identity' => 'check_qgjz',
        			],
        			[
        				'name' => '眼底',
        				'identity' => 'check_yandi',
        			],
        			[
        				'name' => '注视性质',
        				'identity' => 'check_zsxz',
        			],
        			[
        				'name' => '眼压',
        				'identity' => 'check_yanya',
        			],
        			[
        				'name' => '泪液',
        				'identity' => 'check_leiye',
        			],
        			[
        				'name' => '常瞳验光',
        				'identity' => 'check_ctyg',
        			],
        			[
        				'name' => '散瞳验光',
        				'identity' => 'check_styg',
        			],
        			[
        				'name' => '同视机',
        				'identity' => 'check_tsj',
        			],
        			[
        				'name' => '角膜曲率',
        				'identity' => 'check_jmql',
        			],

        			[
        				'name' => '角膜地形图',
        				'identity' => 'check_jmdxt',
        			],
        			[
        				'name' => '实物测量',
        				'identity' => 'check_swcl',
        			],
        			[
        				'name' => '其它检查',
        				'identity' => 'check_other',
        			],
        			[
        				'name' => '地形图片',
        				'identity' => 'check_map_picture',
        			],
        			[
        				'name' => '眼底图片',
        				'identity' => 'check_yandi_picture',
        			],
        			[
        				'name' => '生物测量图片',
        				'identity' => 'check_swcl_picture',
        			],
        			[
        				'name' => '复诊图片',
        				'identity' => 'check_fuzhen_picture',
        			],
        		]
        	],
        	[
        		'name' => '诊断处置',
        		'identity' => 'handle',
        		'is_display' => 1,
        		'sections' => [
        			[
        				'name' => '诊断',
        				'identity' => 'handle_zd',
        			],
        			[
        				'name' => '处置',
        				'identity' => 'handle_cz',
        			],
        		]
        	],
        	[
        		'name' => '验光配镜',
        		'identity' => 'optician',
        		'is_display' => 1,
        		'sections' => [
        			[
        				'name' => '一般情况',
        				'identity' => 'optician_yiban',
        			],
        			[
        				'name' => '取镜',
        				'identity' => 'optician_qujing',
        			],
        			[
        				'name' => '处方',
        				'identity' => 'optician_chufang',
        			],
        		]
        	],
        	[
        		'name' => '角膜接触',
        		'identity' => 'aplastic',
        		'is_display' => 1,
        		'sections' => [
        			[
        				'name' => ' 试戴片参数',
        				'identity' => 'aplastic_sdpcs',
        			],
        			[
        				'name' => '配适测试 动态配适',
        				'identity' => 'aplastic_dtps',
        			],
        			[
        				'name' => '配适测试 静态配适',
        				'identity' => 'aplastic_jtps',
        			],
        			[
        				'name' => '验片记录',
        				'identity' => 'aplastic_ypjl',
        			],
        			[
        				'name' => '交片记录',
        				'identity' => 'aplastic_jpjl',
        			],
        			[
        				'name' => '用户主诉',
        				'identity' => 'aplastic_yhzs',
        			],
        			[
        				'name' => ' 眼部复查',
        				'identity' => 'aplastic_ybfc',
        			],
        			[
        				'name' => '镜片复查',
        				'identity' => 'aplastic_jpfc',
        			],
        			[
        				'name' => '订单',
        				'identity' => 'aplastic_order',
        			],
        		]
        	],
        	[
        		'name' => '干眼症',
        		'identity' => 'dryeye',
        		'sections' => [
        			[
        				'name' => '历史询问',
        				'identity' => 'dryeye_lsxw',
        			],
        			[
        				'name' => '疾病史',
        				'identity' => 'dryeye_jbs',
        			],
        			[
        				'name' => '饮食习惯',
        				'identity' => 'dryeye_diet',
        			],
        			[
        				'name' => '问卷调查',
        				'identity' => 'dryeye_wjdc',
        			],
        			[
        				'name' => '用眼情况',
        				'identity' => 'dryeye_usage',
        			],
        			[
        				'name' => '眼科检查',
        				'identity' => 'dryeye_check',
        			],
        			[
        				'name' => '治疗方案',
        				'identity' => 'dryeye_plan',
        			],
        			
        		]
        	]
        	
        ];

        foreach($datas as $v) {
        	//dump($v['name']);
        	$row = PageSection::firstOrCreate(['name' => $v['name']], ['identity' => $v['identity']]);
        	foreach($v['sections'] as $v1) {
        		$row->sections()->firstOrCreate(['identity' => $v1['identity']], $v1);
        	}
        }
    }
}
