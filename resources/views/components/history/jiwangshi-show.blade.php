<div class="container">
    <x-display-item label="主诉" :data="$data->zs??''"/>
    <x-display-item label="既往史" :data="$data->jws1??''"/>
    <x-display-item label="既往史" :data="$data->jzs??''"/>
    <x-display-item label="视力" :data="$data->shili??''"/>
    <x-display-item label="过敏史" :data="$data->gms??''"/>
    <x-display-item label="是否有过散瞳" :data="!empty($data->is_st)?'是':'否'"/>
    <x-display-item label="是否配有过镜" :data="!empty($data->is_pj)?'是':'否'"/>
    <x-display-item label="戴镜是否舒适" :data="!empty($data->eyeclass_ok)?'是':'否'"/>
    <x-display-item label="多长时间配一次镜" :data="!empty($data->over_yj_time)? $data->over_yj_time.'年':'' "/>
    <x-display-item label="配几幅" :data="$data->pj_count??''"/>
    <x-display-item label="目前戴镜度数">
        <div class="row">
            <div class="col-sm-2">右眼：{{$data->right_eye??''}}</div>
            <div class="col-sm-2">左眼：{{$data->left_eye??''}}</div>
        </div>
    </x-display-item>
    <x-display-item label="最近一次配镜时间" :data="$data->pjsj??''"/>
    <x-display-item label="以往采用的矫治方法" :data="$data->ywff??''"/>
</div>