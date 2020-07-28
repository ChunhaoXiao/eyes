<div class="container mt-3">
    <h3>交片记录</h3>
    <x-display-item labelcol="col-sm-auto">
        <div class="row">
            <div class="col-sm">
                日期：{{$data->jpjl_date}}
            </div>
            <div class="col-sm">
                交片人：{{$data->jpjl_jpr}}
            </div>
            <div class="col-sm">
                受片人：{{$data->jpjl_spr}}
            </div>
        </div>
    </x-display-item>
    @foreach(App\Models\Aplastic::QUESTIONS as $k => $v)
    <x-display-item :label="$v" labelcol="col-sm-4" :data="$data->$k == 1 ? '是':'否'"/>
    @endforeach
    <x-display-item label="复诊记录日期" :data="$data->jpjl_bottom_date"/>
    <x-display-item label="已戴镜时间" :data="$data->jpjl_ydsj.' 天'"/>
    <x-display-item label="检查人" :data="$data->jpjl_check_user"/>
</div>