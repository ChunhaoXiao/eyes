<x-section-title title="眼科检查"/>
<div class="container">
 
    <x-display-item label="裸眼">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{$data->luoyan_r??''}}
            </div>
            <div class="col-sm-auto">
                左眼：{{$data->luoyan_l??''}}
            </div>
        </div>
    </x-display-item>
    <x-display-item label="现镜矫正">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{$data->luoyan_r??''}}
            </div>
            <div class="col-sm-auto">
                左眼：{{$data->luoyan_l??''}}
            </div>
        </div>
    </x-display-item>
    <x-display-item label="眼压">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{$data->luoyan_r??''}}
            </div>
            <div class="col-sm-auto">
                左眼：{{$data->luoyan_l??''}}
            </div>
        </div>
    </x-display-item>
    <x-display-item label="眼睑">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{$data->luoyan_r??''}}
            </div>
            <div class="col-sm-auto">
                左眼：{{$data->luoyan_l??''}}
            </div>
        </div>
    </x-display-item>
    <x-display-item label="睫毛" :data="$data->jiemao??''" />
    <x-display-item label="结膜" :data="$data->jiemo??''" />
    <x-display-item label="角膜" :data="$data->jiaomo??''" />
    <x-display-item label="泪河高度" :data="App\Models\Dryeye::HEIGHT[$data->height]??''" />
    <x-display-item label="泪液测试" :data="$data->leiye_test??''" />
    <x-display-item label="泪膜破裂时间" :data="$data->lmpl_time??''" />
    <x-display-item label="螨虫检查" :data="$data->manchong_test??''" />
</div>