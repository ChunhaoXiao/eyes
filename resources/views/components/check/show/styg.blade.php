<div class="container mb-3">
<h3>散瞳验光</h3>
<x-display-item label="小孔视力">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->styg_xgsl_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->styg_xgsl_l??''}}</div>
    </div>
</x-display-item>
<x-display-item label="屈光度">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->styg_qgd_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->styg_qgd_l??''}}</div>
    </div>
</x-display-item>
</div>