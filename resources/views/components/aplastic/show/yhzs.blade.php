<div class="container mt-3">
    <h3>用户主诉</h3>

    <x-display-item label="" labelcol="col-sm-auto" :data="$data->zs"/>

    @if(!empty($data->yhzs_other_desc))
     <x-display-item label="其它" labelcol="col-sm-auto" :data="$data->yhzs_other_desc"/>
    @endif
</div>