<div class="container mb-3">
<h3>同视机</h3>
<x-display-item label="同时视">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->tsj_tsj_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->tsj_tsj_l??''}}</div>
    </div>
</x-display-item>
<x-display-item label="融合视">
    <div class="row">
        <div class="col-sm-2">融合：{{$data->tsj_rhs_rh??''}}</div>
        <div class="col-sm-2">立体视：{{$data->tsj_rhs_lts??''}}</div>
        <div class="col-sm-2">分开：{{$data->tsj_rhs_fk??''}}</div>
    </div>
</x-display-item>
<x-display-item label="网膜对应功能" :data="$data->tsj_rhs_wmdygn??''"/>
</div>