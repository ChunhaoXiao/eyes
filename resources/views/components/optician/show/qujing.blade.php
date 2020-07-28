<div class="container mb-3 mt-3">
    <h3>取镜</h3>
    <x-display-item label="眼镜加工人" :data="$data->qj_yjjgr" />

    <x-display-item label="到店检测">
        <div class="row">
            <div class="col-sm-auto">
                镜片是否完好:{{$data->qj_ddjcr_jpsfwh?'是':'否'}}
            </div>
            <div class="col-sm-auto">
                镜架是否完好:{{$data->qj_ddjcr_jjsfwh?'是':'否'}}
            </div>
            <div class="col-sm-auto">
                度数是否准确无误:{{$data->qj_ddjcr_dssfww == 0 ? '是' :'否'}}
            </div>
            <div class="col-sm-auto">
                检测人：{{$data->qj_jcr}}
            </div>
        </div>
    </x-display-item>

    <x-display-item label="配套物料">
        <div class="row">
            <div class="col-sm-auto">
                镜盒:{{$data->qj_ptwl_jh}}
            </div>
            <div class="col-sm-auto">
                镜布:{{$data->qj_ptwl_jb}}
            </div>
            <div class="col-sm-auto">
                包装盒:{{$data->qj_ptwl_bzh}}
            </div>
        </div>
        <div class="row mt-2">
           <div class="col-sm">
                其它：{{$data->qj_ptwl_qt}}
            </div>
        </div>    
    </x-display-item>

    <x-display-item label="配镜人佩戴矫正视力">
        <div class="row">
            <div class="col-sm-auto">右眼：{{$data->qj_pjrdyjjzsl_r}}</div>
            <div class="col-sm-auto">左眼：{{$data->qj_pjrdyjjzsl_l}}</div>
        </div>
    </x-display-item>

    <x-display-item label="取镜日期" :data="$data->qj_time??''"/>
    <x-display-item label="预计复诊日期" :data="$data->qj_pjrdyjjzsl_yyfzr_time??''"/>
</div>