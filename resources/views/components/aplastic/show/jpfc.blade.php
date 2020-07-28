<div class="container mt-3">
    <h3>镜片复查</h3>
    <x-display-item label="表面状况">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{implode('、', array_intersect_key(App\Models\Aplastic::BIAOMIAN,array_flip($data->bmzk_r)))}}
            </div>
            <div class="col-sm-auto">
                左眼：{{implode('、', array_intersect_key(App\Models\Aplastic::BIAOMIAN,array_flip($data->bmzk_l)))}}
            </div>
        </div>
    </x-display-item>

    <x-display-item label="边缘状况">
        <div class="row">
            <div class="col-sm-auto">
                右眼： {{implode('、', array_intersect_key(App\Models\Aplastic::BIANYUAN,array_flip($data->byzk_r)))}}
            </div>
            <div class="col-sm-auto">
                左眼：{{implode('、', array_intersect_key(App\Models\Aplastic::BIANYUAN,array_flip($data->byzk_l)))}}
            </div>
        </div>
    </x-display-item>

    <x-display-item label="是否已过期">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{$data->jmfc_sfyjgq_r == 1 ?'是':'否'}}
            </div>
            <div class="col-sm-auto">
                左眼：{{$data->jmfc_sfyjgq_l == 1?'是':'否'}}
            </div>
        </div>
    </x-display-item>

    <x-display-item label="处置">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{implode('、', array_intersect_key(App\Models\Aplastic::CHUZHI,array_flip($data->chuzhi_r)))}}
            </div>
            <div class="col-sm-auto">
                左眼：{{implode('、', array_intersect_key(App\Models\Aplastic::CHUZHI,array_flip($data->chuzhi_l)))}}
            </div>
        </div>
    </x-display-item>
    @foreach(App\Models\Aplastic::FUCHA_QUESTION as $k => $v)
        <x-display-item labelcol="col-sm-4" :label="$v" :data="$data->$k == 1? '是': '否'" />
    @endforeach
   
</div>