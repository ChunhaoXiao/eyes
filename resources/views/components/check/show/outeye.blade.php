<div class="container mb-3">
<h3>外眼</h3>
<x-display-item label="眼睑">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->sl_wy_yl_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->sl_wy_yl_l??''}}</div>
    </div>
</x-display-item>
<x-display-item label="结膜">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->sl_wy_jm_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->sl_wy_jm_l??''}}</div>
    </div>
</x-display-item>
</div>
