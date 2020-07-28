<x-section-title title="既往史"></x-section-title>
<div class="container">
    <x-display-item :label="$text['zs']" :data="$data->zs??''"/>
    <x-display-item :label="$text['jws1']" :data="$data->jws1??''"/>
    <x-display-item :label="$text['jzs']" :data="$data->jzs??''"/>
    <x-display-item :label="$text['jws']??''" :data="$data->shili??''"/>
    <x-display-item :label="$text['gms']" :data="$data->gms??''"/>
    <x-display-item :label="$text['is_st']??'是否散瞳'" :data="!empty($data->is_st)?'是':'否'"/>
    <x-display-item :label="$text['is_pj']??'是否配镜'" :data="!empty($data->is_pj)?'是':'否'"/>
    <x-display-item :label="$text['eyeclass_ok']??''" :data="!empty($data->eyeclass_ok)?'是':'否'"/>
    <x-display-item :label="$text['over_yj_time']" :data="!empty($data->over_yj_time)? $data->over_yj_time.'年':'' "/>
    <x-display-item :label="$text['pj_count']" :data="$data->pj_count??''"/>
    <x-display-item :label="$text['eye_group']">
        <div class="row">
            <div class="col-sm-2">{{$text['right_eye']}}：{{$data->right_eye??''}}</div>
            <div class="col-sm-2">{{$text['left_eye']}}：{{$data->left_eye??''}}</div>
        </div>
    </x-display-item>
    <x-display-item :label="$text['pjsj']" :data="$data->pjsj??''"/>
    <x-display-item :label="$text['ywff']" :data="$data->ywff??''"/>
</div>