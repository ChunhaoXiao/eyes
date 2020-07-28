<div class="container mb-3">
<h3>视力</h3>
<x-display-item label="裸眼">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->sl_ly_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->sl_ly_l??''}}</div>
    </div>
</x-display-item>
<x-display-item label="云雾后">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->sl_ywh_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->sl_ywh_l??''}}</div>
    </div>
</x-display-item>
<x-display-item label="现镜矫正">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->sl_xjjz_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->sl_xjjz_l??''}}</div>
    </div>
</x-display-item>
</div>