<div class="container mb-3">
<h3>泪液</h3>

<x-display-item label="泪液量">
    <div class="row">
        <div class="col-sm-auto">右眼：{{$data->ly_lyl_r??''}}</div>
        <div class="col-sm-auto">左眼：{{$data->ly_lyl_l??''}}</div>
    </div>
</x-display-item>

<x-display-item label="破裂时间">
    <div class="row">
        <div class="col-sm-auto">右眼：{{$data->ly_plsj_r??''}}</div>
        <div class="col-sm-auto">左眼：{{$data->ly_plsj_l??''}}</div>
    </div>
</x-display-item>

</div>