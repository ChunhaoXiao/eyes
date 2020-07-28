<div class="container mb-3">
    <h3>屈光间质</h3>
    @foreach(App\Models\Check::QGJZ as $k => $v)
        @if(is_array($v))
            <x-display-item :label="$v['text']">
                @foreach($v['data'] as $k1 => $v1)
                    <div class="row">
                        <div class="col-sm">右眼{{$v1}}: {{$data->{$v['field'].'_r_'.$k1} }}</div>
                        <div class="col-sm">左眼{{$v1}}: {{$data->{$v['field'].'_l_'.$k1} }}</div>
                    </div>
                @endforeach
            </x-display-item>
        @else
        <x-display-item :label="$v">
        <div class="row">
            <div class="col-sm-auto">右眼：{{$data->{$k.'_r'}??''}}</div>
            <div class="col-sm-auto">左眼：{{$data->{$k.'_l'}??''}}</div>
        
        </div>
        </x-display-item>
        @endif
    @endforeach
</div>