<h3>用眼情况</h3>
<div class="container">
    <div class="row">
        <div class="col-sm"><x-inputgroup type="number" label="每天看电视时间" unit="分钟" name="tv_time_used" :value="$data->tv_time_used??''"/></div>
        <div class="col-sm"><x-inputgroup type="number" label="每天用电脑时间" unit="分钟" name="pc_time_used" :value="$data->pc_time_used??''"/></div>
    </div>
    <div class="row">
        <div class="col-sm"><x-inputgroup type="number" label="每天看手机时间" unit="分钟" name="mobile_time_used" :value="$data->mobile_time_used??''"/></div>
        <div class="col-sm"><x-inputgroup type="number" label="每天看书时间" unit="分钟" name="reading_time_used" :value="$data->reading_time_used??''"/></div>
    </div>
    <div class="row">
        <div class="col-sm">
            <x-textinput text="眼科病史" name="disease_history" :value="$data->disease_history??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <x-textinput text="用眼情况" name="eye_usage" :value="$data->eye_usage??''"/>
        </div>
    </div>
</div>