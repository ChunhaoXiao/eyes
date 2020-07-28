<div class="container mt-3">
    <h3>用眼情况</h3>
    <x-display-item label="每天看电视时间" :data="$data->tv_time_used.' 分钟'"/>
    <x-display-item label="每天用电脑时间" :data="$data->pc_time_used.' 分钟'"/>
    <x-display-item label="每天看手机时间" :data="$data->mobile_time_used. ' 分钟'"/>
    <x-display-item label="每天看书时间" :data="$data->reading_time_used.' 分钟'"/>
    <x-display-item label="眼科病史" :data="$data->disease_history"/>
    <x-display-item label="用眼情况" :data="$data->eye_usage"/>
</div>