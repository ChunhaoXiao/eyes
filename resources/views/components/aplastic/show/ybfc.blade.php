<div class="container mt-3">
    <h3>眼部复查</h3>
    @foreach(App\Models\Aplastic::FUCHA as $k => $v)
        <x-display-item  :label="$v">
            <div class="row">
                <div class="col-sm-auto">
                    右眼：{{$data->{$k.'_r'} }}
                </div>
                <div class="col-sm-auto">
                    左眼：{{$data->{$k.'_l'} }}
                </div>
            </div>
        </x-display-item>
    @endforeach
    <x-display-item label="处置(根据角膜情况做出)" labelcol="col-sm-3">
        <div class="row">
            <div class="col-sm-auto">
                右眼：{{$data->ybfc_czgujmzk_r}}
            </div>
            <div class="col-sm-auto">
                左眼：{{$data->ybfc_czgujmzk_l}}
            </div>
        </div>
    </x-display-item>

    <x-display-item label="处置(根据镜片适配度做出)" labelcol="col-sm-3">
        <div class="row">
        <div class="col-sm-auto">
            右眼：{{$data->ybfc_czgjzpspd_r}}
        </div>
        <div class="col-sm-auto">
            左眼：{{$data->ybfc_czgjzpspd_l}}
        </div>
        </div>
        
    </x-display-item>
</div>