<div class="container">
    <h3>一般情况</h3>
    <x-display-item label="职业描述" :data="$data->zyms" />
    <x-display-item label="身高" :data="$data->height" />
    <x-display-item label="饮食习惯" :data="$data->ysxg" />
    <x-display-item label="用眼习惯" :data="$data->yyxg" />
    <x-display-item label="家庭病史" :data="$data->jtbs??''"/>
    <x-display-item label="现病史" :data="$data->xbs??''"/>
    <x-display-item label="首诊时间" :data="$data->first_time??''"/>
</div>