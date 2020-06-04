<div class="container mb-3">
<h3>角膜曲率</h3>
<x-display-item label="右眼">
    <div class="row">
        <div class="col-sm-2">HK：{{$data->jmql_r_hk??''}}</div>
        <div class="col-sm-2">VK：{{$data->jmql_r_vk??''}}</div>
    </div>
</x-display-item>
<x-display-item label="左眼">
    <div class="row">
        <div class="col-sm-2">HK：{{$data->jmql_l_hk??''}}</div>
        <div class="col-sm-2">VK：{{$data->jmql_l_vk??''}}</div>
    </div>
</x-display-item>
</div>