<x-section-title title="种类"/>
<div class="container">
    @foreach(['kx_zyjldx' =>'中医经络点穴', 'kx_yqxl' => '仪器训练', 'kx_zlfa' => '治疗方案', 'kx_doctor' => '医生'] as $k => $v)
        @if(!empty($data->$k))
        <div class="row pb-3">
            <div class="col-sm-2 font-weight-bold">{{$v}}：</div><div class="col-sm-auto"> {{ $data->$k }}</div>
        </div>
        @endif
    @endforeach
</div>