<h3>注视性质</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-atuo col-form-label">
            <b>右眼</b>
        </div>
        @foreach(App\Models\Check::ZSXZ as $k => $v)
        <div class="col-sm">
            <x-textinput :text="$v" :name="'zsxz_r_'.$k" :value="$data->{'zsxz_r_'.$k}??''"/>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-atuo col-form-label">
            <b>左眼</b>
        </div>
        @foreach(App\Models\Check::ZSXZ as $k => $v)
        <div class="col-sm">
            <x-textinput :text="$v" :name="'zsxz_l_'.$k" :value="$data->{'zsxz_l_'.$k}??''" />
        </div>
        @endforeach
    </div>
</div>