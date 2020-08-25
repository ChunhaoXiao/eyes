@extends('home.layout')

@section('content')
	<div class="myopia">
    
    <h2>验光配镜</h2>
        <div class="glasses">
            <h3>一般情况</h3>
            <x-home.case.opticianitem label="职业描述" :value="$data->zyms??''"/>
            <x-home.case.opticianitem label="身高" :value="$data->height??''"/>
            <x-home.case.opticianitem label="饮食习惯" :value="$data->ysxg??''"/>
            <x-home.case.opticianitem label="用眼习惯" :value="$data->jtbs??''"/>
            <x-home.case.opticianitem label="家庭病史" :value="$data->xbs??''"/>
            <x-home.case.opticianitem label="现病史" :value="$data->zyms??''"/>
            <x-home.case.opticianitem label="首诊时间" :value="$data->first_time??''"/>
        </div>

    <!-- {if empty($dc['jc_lysl_r'])} -->
    <!-- <div class="glasses">
        <h3 style="margin-bottom: 0.4rem">检测</h3>
        <div class="gla-jiance">
            <div>裸眼视力</div>
            <p>右眼： <span>{$info.jc_lysl_r ?? ''}</span></p>
            <p>左眼： <span>{$info.jc_lysl_l ?? ''}</span></p>
        </div>
        <div class="gla-jiance">
            <div>云雾视力</div>
            <p>右眼： <span>{$info.jc_ywsl_r ?? ''}</span></p>
            <p>左眼： <span>{$info.jc_ywsl_l ?? ''}</span></p>
        </div>
        <div class="gla-jiance">
            <div>原镜矫正</div>
            <p>右眼： <span>{$info.jc_yjz_r ?? ''}</span></p>
            <p>左眼： <span>{$info.jc_yjz_l ?? ''}</span></p>
        </div>
        <div class="gla-jiance">
            <div>验光</div>
            <p>右眼： <span>{$info.jc_yg_r ?? ''}</span></p>
            <p>左眼： <span>{$info.jc_yg_l ?? ''}</span></p>
        </div>
    </div>
    <div class="pei1">
        <p>是否散瞳</p>
        {if condition="!empty($info) && $info['jc_yg_sfst'] == '1'"}
            <span class="on"></span>
        {else /}
            <span></span>
        {/if}
    </div>
    <div class="qulv">
        <h3 style="margin-bottom: 0.5rem">曲率</h3>
        <div class="ql-nn1">
            <div class="yydiv">右眼</div>
            <p class="yyhk">HK ：<span class="yyspan">{$info.jc_ql_r_hk ?? ''}</span></p>
            <p class="yyhk">VK ：<span class="yyspan">{$info.jc_ql_r_vk ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv">左眼</div>
            <p class="yyhk">HK ：<span class="yyspan">{$info.jc_ql_l_hk ?? ''}</span></p>
            <p class="yyhk">VK ：<span class="yyspan">{$info.jc_ql_l_vk ?? ''}</span></p>
        </div>
    </div>
    <div class="qulv">
        <h3 style="margin-bottom: 0.45rem">眼位</h3>
        <div class="ql-nn1">
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.jc_yw_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.jc_yw_l ?? ''}</span></p>
            <p class="yyhk">主视眼 ：<span class="yyspan">{$info.jc_yw_c ?? ''}</span></p>
        </div>
    </div>
    <div class="qulv">
        <h3 style="margin-bottom: 0.45rem">双眼视功能</h3>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt">NRA：</span> <span class="yylong">{$info.jc_sygn_nra ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt">PRA：</span> <span class="yylong">{$info.jc_sygn_pra ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt">BCC：</span> <span class="yylong">{$info.jc_sygn_bcc ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv" style="width: 1.1rem;text-align: right">AMP：</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.jc_sygn_amp_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.jc_sygn_amp_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt">双眼：</span> <span class="yylong">{$info.jc_sygn_amp_c ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt">AC/A：</span> <span class="yylong">{$info.jc_sygn_ac_a ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt">AF：</span> <span class="yylong">{$info.jc_sygn_af ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt">结论：</span> <span class="yylong">{$info.jc_result ?? ''}</span></p>
        </div>
    </div>
    <div class="qulv">
        <h3 style="margin-bottom: 0.45rem">眼轴检查   </h3>
        <div class="ql-nn1 nn2">
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.jc_yzjc_r ?? ''}</span></p>
            <p class="yyhk" style="margin-left: 1rem">左眼 ：<span class="yyspan">{$info.jc_yzjc_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt" style="width: 1.3rem;">眼病筛查：   </span> <span class="yylong">{$info.jc_ybjc ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt">日期：</span> <span class="yylong">{$info.jc_check_date ?? ''}</span></p>
        </div>
    </div> -->

    <!-- {/if} -->

    


    @foreach(Auth::user()->optician_datas as $v)
    <!-- <div class="chufang">
        <h3>处方</h3>
        <div class="cf-blod">
            <p>眼镜类型   </p>
            <div>{{ $v->yjlx ?? ''}}</div>
        </div>
    </div> -->
    <div class="qulv">
    	<x-home.case.optician.chufang :data="$v"/>
    </div>
    @endforeach
    
    <!-- div class="qulv">
        <h3 style="margin-bottom: 0.35rem">近用</h3>
        <div class="ql-nn1">
            <div class="yydiv yywidth">球镜</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.cf_jy_qj_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.cf_jy_qj_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">柱镜</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.cf_jy_zj_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.cf_jy_zj_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">光轴</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.cf_jy_gz_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.cf_jy_gz_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">棱镜</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.cf_jy_lj_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.cf_jy_lj_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">底向</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.cf_jy_dx_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.cf_jy_dx_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">矫正视力</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.cf_jy_jzsl_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.cf_jy_jzsl_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">瞳距</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.cf_jy_tj_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.cf_jy_tj_l ?? ''}</span></p>

        </div>
        <div class="ql-nn1">
            <p class="yyhk">镜片型号 ：<span class="yymid" style="width: 1.5rem;">{$info.glasses_pectacle_type ?? ''}</span></p>
            <p class="yyhk">价格 ：<span class="yymid" style="width: 1.5rem;">{$info.glasses_pectacle_price ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk">镜架型号 ：<span class="yymid" style="width: 1.5rem;">{$info.glasses_jjxh ?? ''}</span></p>
            <p class="yyhk">价格 ：<span class="yymid" style="width: 1.5rem;">{$info.glasses_jjjg ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt" style="text-align: left;">实收：</span> <span class="yylong">{$info.glasses_amount ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt" style="text-align: left;">日期：</span> <span class="yylong">{$info.glasses_time ?? ''}</span></p>
        </div>
    </div> -->
    


    

    <div class="qulv">
        <h3 style="margin-bottom: 0.35rem;font-weight: bold">取镜</h3>
        <div class="glpeo">
            <p>眼镜加工人   </p>
            <div>{{$data->qj_yjjgr ?? ''}}</div>
        </div>
    </div>

    <div class="pei1">
        <p>到店检测</p>
    </div>

    <div class="pei1">
        <p>镜片是否完好</p>
        <span class="{{$data->qj_ddjcr_jpsfwh == 1?'on':''}}"></span>
    </div>

    <div class="pei1">
        <p>镜架是否完好</p>
        <!-- {if condition="!empty($info) && $info['qj_ddjcr_jjsfwh'] == '1'"} -->
        <span class="{{ $data->qj_ddjcr_jjsfwh == 1?'on' :'' }}"></span>
        <!-- {else /}
        <span></span>
        {/if} -->
    </div>
    <div class="pei1">
        <p>度数是否无误</p>
         <span class="{{$data->qj_ddjcr_dssfww == 0?'on':''}}"></span>
        <!-- {if condition="!empty($info) && $info['qj_ddjcr_dssfww'] == '1'"}
        <span class="on"></span>
        {else /}
        <span></span>
        {/if} -->
    </div>
    <div class="ql-nn1">
        <p class="yyhk"><span class="yyltxt" style="text-align: left;">检测人：</span> <span class="yylong">{{$data->qj_jcr ?? ''}}</span></p>
    </div>
    <div class="pei1">
        <p>到店检测</p>
    </div>
    <div class="qulv">
        <h3 style="margin-bottom: 0.45rem">配套物料</h3>
        <div class="ql-nn1">
            <p class="yyhk">镜盒 ：<span class="yyspan">{{ $data->qj_ptwl_jh ?? '' }} </span></p>
            <p class="yyhk">镜布 ：<span class="yyspan">{{ $data->qj_ptwl_jb ?? '' }}</span></p>
            <p class="yyhk">包装盒 ：<span class="yyspan">{{ $data->qj_ptwl_bzh ?? ''}}</span></p>
        </div>
    </div>
    <div class="ql-nn1">
        <p class="yyhk"><span class="yyltxt" style="text-align: left;">其他：</span> <span class="yylong">{{$data->qj_ptwl_qt ?? ''}}</span></p>
    </div>
    <div class="qulv" style="margin-top: 0.45rem">
        <h3 style="margin-bottom: 0.45rem"> 配镜人戴镜矫正视力   </h3>
        <div class="ql-nn1 nn2">
            <p class="yyhk">右眼 ：<span class="yyspan">{{ $data->qj_pjrdyjjzsl_r ?? '' }}</span></p>
            <p class="yyhk" style="margin-left: 1rem">左眼 ：<span class="yyspan">{{ $data->qj_pjrdyjjzsl_l ?? ''}}</span></p>
        </div>
    </div>
    <div class="ql-nn1">
        <p class="yyhk"><span class="yyltxt" style="text-align: left;width: 1.9rem">预计复诊日期：</span><span class="yylong" style="width: 3.6rem">{{$data->qj_pjrdyjjzsl_yyfzr_time ?? ''}}</span></p>
    </div>
    <div class="ql-nn1">
        <p class="yyhk"><span class="yyltxt" style="text-align: left;width: 1.9rem">取镜日期：</span><span class="yylong" style="width: 3.6rem">{{$data->qj_time ?? ''}}</span></p>
    </div>
    
</div>
@endsection