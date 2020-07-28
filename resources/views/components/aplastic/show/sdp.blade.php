<div class="container">
    <h3>试戴片参数</h3>
    <x-display-item label="OD">
        <div class="row">
            @foreach(App\Models\Aplastic::SDP as $k => $v)
            <div class="col-sm-auto">
                {{$v}}：{{$data->{'sdpgjl_sdcs_'.$k} }}
            </div>
            @endforeach
        </div>
    </x-display-item>
    <x-display-item label="OD">
        <div class="row">
            @foreach(App\Models\Aplastic::SDP as $k => $v)
            <div class="col-sm-auto">
                {{$v}}：{{$data->{'sdpgjl_os_sdcs_'.$k} }}
            </div>
            @endforeach
        </div>
    </x-display-item>
</div>