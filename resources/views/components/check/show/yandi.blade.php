<div class="container mb-3">
    <h3>眼底</h3>
    <x-display-item label="血管">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->yd_xg_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->yd_xg_l??''}}</div>
       
    </div>
    </x-display-item>

    <x-display-item label="视乳头">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->yd_srt_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->yd_srt_l??''}}</div>
       
    </div>
    </x-display-item>
    <x-display-item label="视网膜">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->yd_swn_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->yd_swn_l??''}}</div>
       
    </div>
    </x-display-item>

    <x-display-item label="黄斑">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->yd_hb_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->yd_hb_l??''}}</div>
       
    </div>
    </x-display-item>
</div>