<div class="container mt-3">
    <h3>验片记录</h3>
    <x-display-item label="验片记录">
        <div class="row">
            <div class="col-sm">订单号:{{$data->ypjl_ddbh}}</div>
            <div class="col-sm">收片日期：{{$data->ypjl_sp_time??''}}</div>
            <div class="col-sm">验片人：{{$data->ypjl_user??''}}</div>
            <div class="col-sm">验片日期:{{$data->ypjl_date??''}}</div>
        </div>
    </x-display-item>
    <x-display-item label="加工质量">
        <div class="row">
            <div class="col-sm">表面划痕:{{$data->jgzl_bmhh == 1?'是' :'否'}}</div>
            <div class="col-sm">边缘缺损：{{$data->jgzl_byqs == 1?'是' :'否'}}</div>
            <div class="col-sm">表面光滑：{{$data->jgzl_bmgh == 1?'是':'否'}}</div>
            <div class="col-sm">边缘光滑:{{$data->jgzl_bygh == 1? '是' :'否'}}</div>
        </div>
    </x-display-item>
   
    <x-display-item label="验片试戴">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{$data->ypsd_dzsl_r??''}}
            </div>
            <div class="col-sm-auto">
                左眼：{{$data->ypsd_dzsl_l??''}}
            </div>
        </div>
    </x-display-item>
    <x-display-item label="居中性">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{$data->ypsd_jzx_r == 1? '是' : '否'}}
            </div>
            <div class="col-sm-auto">
                左眼：{{$data->ypsd_jzx_l == 1? '是' : '否'}}
            </div>
        </div>
    </x-display-item>

    <x-display-item label="活动度MM">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{ App\Models\Aplastic::HDDMM[$data->ypsd_dddmm_r]??'' }}
            </div>
            <div class="col-sm-auto">
                左眼：{{ App\Models\Aplastic::HDDMM[$data->ypsd_dddmm_l]??'' }}
            </div>
        </div>
    </x-display-item>
    <x-display-item label="荧光染色评估">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{App\Models\Aplastic::YGRSPG[$data->ypsd_ygsepg_r_1]??''}}
            </div>
            <div class="col-sm-auto">
                左眼：{{App\Models\Aplastic::YGRSPG[$data->ypsd_ygsepg_l_1]??''}}
            </div>
        </div>
    </x-display-item>
    <x-display-item label="结论" :data="$data->ypsd_ygsepg_l == 1 ?'可以交付':'不可以交付'"/>
    
</div>