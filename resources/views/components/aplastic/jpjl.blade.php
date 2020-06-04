<h3>交片记录</h3>
<div class="container">
    <div class="row">
        <div class="col-sm"><x-textinput  text="日期" type="date" name="jpjl_date" :value="$data->jpjl_date??''"/></div>
        <div class="col-sm"><x-textinput  text="交片人" name="jpjl_jpr" :value="$data->jpjl_jpr??''"/></div>
        <div class="col-sm"><x-textinput  text="收片人" name="jpjl_spr" :value="$data->jpjl_spr??''"/></div>
    </div>
    @foreach(App\Models\Aplastic::QUESTIONS as $k => $v)
        <div class="row">
            <x-radio col="col-sm-6" :text="$v" :name="$k" :options="[1 => '是', 2 => '否']" :checked="$data->$k??1"/>
        </div>
    @endforeach

    <div class="row">
        <div class="col-sm">
            <x-textinput text="复诊记录日期" type="date" name="jpjl_bottom_date" :value="$data->jpjl_bottom_date??''"/>
        </div>
        <div class="col-sm">
           <x-inputgroup label="已戴镜时间" unit="天" name="jpjl_ydsj" :value="$data->jpjl_ydsj??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="检查人" name="jpjl_check_user" :value="$data->jpjl_check_user??''"/>
        </div>
    </div>
</div>