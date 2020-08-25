<x-section-title title="配适测试 动态配适"/>

<div class="container">
    <div class="row">
        <label for="" class="col-sm-1 col-form-label">中心定位</label>
        <div class="col-sm">
            <x-textinput text="OD" name="spcs_zxdw_od" :value="$data->spcs_zxdw_od??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="OS" name="spcs_zxdw_os" :value="$data->spcs_zxdw_os??''"/>
        </div>
    </div>
    <div class="row">
        <label for="" class="col-sm-1 col-form-label">活动度</label>
        <div class="col-sm">
            <x-textinput text="OD" name="spcs_hdd_od" :value="$data->spcs_hdd_od??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="OS" name="spcs_hdd_os" :value="$data->spcs_hdd_os??''"/>
        </div>
    </div>
    <div class="row">
        <label for="" class="col-sm-1 col-form-label">移动类型</label>
        <div class="col-sm">
            <x-textinput text="OD" name="spcs_ydlx_od" :value="$data->spcs_ydlx_od??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="OS" name="spcs_ydlx_os" :value="$data->spcs_ydlx_os??''"/>
        </div>
    </div>
</div>