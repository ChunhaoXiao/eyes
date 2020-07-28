<div class="container mb-3">
    <h3>双眼视功能</h3>
    <x-display-item label="视功能">
    <div class="row">
        <div class="col-sm-2">NRA：{{$data->jc_sygn_nra??''}}</div>
        <div class="col-sm-2">PRA：{{$data->jc_sygn_pra??''}}</div>
        <div class="col-sm-2">BCC：{{$data->jc_sygn_bcc??''}}</div>
    </div>
    </x-display-item>

    <x-display-item label="AMP">
    <div class="row">
        <div class="col-sm-2">右眼：{{$data->jc_sygn_amp_r??''}}</div>
        <div class="col-sm-2">左眼：{{$data->jc_sygn_amp_l??''}}</div>
        <div class="col-sm-2">双眼：{{$data->jc_sygn_amp_c??''}}</div>
    </div>
    </x-display-item>
    
    <x-display-item label="">
    <div class="row">
        <div class="col-sm-2">AC/A：{{$data->jc_sygn_amp_r??''}}</div>
        <div class="col-sm-2">AF：{{$data->jc_sygn_amp_l??''}}</div>
    </div>
    </x-display-item>

    <x-display-item label="结论" :data="$data->jc_result"/>
</div>