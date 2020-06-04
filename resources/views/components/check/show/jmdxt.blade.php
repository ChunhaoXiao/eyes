<div class="container mb-3">
<h3>角膜地形图</h3>
<x-display-item label="右眼">
    <div class="row">
        <div class="col-sm-auto">中央Simks：{{$data->jmdxt_r_zysimks??''}}</div>
        <div class="col-sm-auto">E值{{$data->jmdxt_r_ez??''}}</div>
    </div>
</x-display-item>

<x-display-item label="左眼">
    <div class="row">
        <div class="col-sm-auto">中央SimKs：{{$data->jmdxt_l_zysimks??''}}</div>
        <div class="col-sm-auto">E值：{{$data->jmdxt_l_ez??''}}</div>
    </div>
</x-display-item>
</div>