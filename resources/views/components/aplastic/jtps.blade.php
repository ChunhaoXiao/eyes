<h3>配适测试 静态配适</h3>
<div class="container">
    <div class="row">
        <label for="" class="col-sm-auto col-form-label">基弧</label>
        <div class="col-sm">
            <x-textinput text="OD" name="spcs_jh_od" :value="$data->spcs_jh_od??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="OS" name="spcs_jh_os" :value="$data->spcs_jh_os??''"/>
        </div>
    </div>
    <div class="row">
        <label for="" class="col-sm-auto col-form-label">反转弧</label>
        <div class="col-sm">
            <x-textinput text="OD" name="spcs_fzh_od" :value="$data->spcs_fzh_od??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="OS" name="spcs_fzh_os" :value="$data->spcs_fzh_os??''"/>
        </div>
    </div>
    <div class="row">
        <label for="" class="col-sm-auto col-form-label">配适弧</label>
        <div class="col-sm">
            <x-textinput text="OD" name="spcs_sph_od" :value="$data->spcs_sph_od??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="OS" name="spcs_sph_os" :value="$data->spcs_sph_os??''"/>
        </div>
    </div>
    <div class="row">
        <label for="" class="col-sm-auto col-form-label">戴镜视力</label>
        <div class="col-sm">
            <x-textinput text="OD" name="spcs_djsl_od" :value="$data->spcs_djsl_od??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="OS" name="spcs_djsl_os" :value="$data->spcs_djsl_os??''"/>
        </div>
    </div>
</div>