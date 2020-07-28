<div class="container mb-3">
<h3>生物测量</h3>
@foreach(App\Models\Check::SWCL as $k => $v)
    <x-display-item :label="$v">
        <div class="row">
            <div class="col-sm-2">右眼：{{$data->{$k.'_r'}??''}}</div>
            <div class="col-sm-2">左眼：{{$data->{$k.'_l'}??''}}</div>
        </div>
    </x-display-item>
@endforeach
</div>