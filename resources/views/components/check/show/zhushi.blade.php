<div class="container mb-3">
    <h3>注视性质</h3>

    <x-display-item label="右眼">
        <div class="row">
            @foreach(App\Models\Check::ZSXZ as $k => $v)
              <div class="col-sm-2">{{$v}}：{{$data->{'zsxz_r_'.$k}??'' }}</div>
            @endforeach
        </div>
    </x-display-item>

    <x-display-item label="左眼">
        <div class="row">
            @foreach(App\Models\Check::ZSXZ as $k => $v)
            <div class="col-sm-2">{{$v}}：{{ $data->{'zsxz_l_'.$k}??'' }}</div>
            @endforeach
        </div>
    </x-display-item>
</div>