<x-section-title title="取镜"/>

<div class="container">
    <!-- <div class="row">
        <div class="col-sm">眼镜加工人</div>
        <div class="col-sm">

        </div>
    </div> -->
    <x-textinput text="眼镜加工人" name="qj_yjjgr" :value="$data->qj_yjjgr??''"/>
    <p class="py-1 font-weight-bold">到店检测</p>
    <div class="row">
        <div class="col-sm-auto pt-1">
            <x-sbox label="镜片是否完好" :checked="$data->qj_ddjcr_jpsfwh??''" name="qj_ddjcr_jpsfwh" value="1"/>
        </div>
        <div class="col-sm-auto pt-1">
            <x-sbox label="镜架是否完好" :checked="$data->qj_ddjcr_jjsfwh??''" name="qj_ddjcr_jjsfwh" value="1"/>
        </div>
        <div class="col-sm-auto">
            <x-radio text="度数是否无误" name="qj_ddjcr_dssfww"  :options="['是', '否']" :checked="$data->qj_ddjcr_dssfww??0"/>
        </div>
        <div class="col-sm-auto">
            <x-textinput name="" text="检测人" name="qj_jcr" :value="$data->qj_jcr??''"/>
        </div>
    </div>
    <p class="py-1 font-weight-bold">配套物料：</p>
    <div class="row no-gutters">
        <div class="col-sm">
            <x-textinput text="镜盒" name="qj_ptwl_jh" :value="$data->qj_ptwl_jh??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="镜布" name="qj_ptwl_jb" :value="$data->qj_ptwl_jb??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="包装盒" name="qj_ptwl_bzh" :value="$data->qj_ptwl_bzh??''"/>
        </div>
    </div>
    <x-textinput text="其他" name="qj_ptwl_qt" :value="$data->qj_ptwl_qt??''"/>
    <p class="py-1 font-weight-bold">配镜人佩戴矫正视力：</p>
    <div class="row no-gutters">
        <div class="col-sm">
            <x-textinput text="右眼" name="qj_pjrdyjjzsl_r" :value="$data->qj_pjrdyjjzsl_r??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="左眼" name="qj_pjrdyjjzsl_l" :value="$data->qj_pjrdyjjzsl_l??''"/>
        </div>
    </div>
    <x-textinput text="取镜日期" name="qj_time" :value="$data->qj_time??''" type="date"/>
    <x-textinput text="预计复诊日期" name="qj_pjrdyjjzsl_yyfzr_time" type="date" :value="$data->qj_pjrdyjjzsl_yyfzr_time??''"/> 
</div>