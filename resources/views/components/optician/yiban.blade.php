<h3>一般情况</h3>
<div class="container">
    <x-textinput text="职业描述" name="zyms" :value="$data->zyms??''"/>
    <div class="row">
        <div class="col-sm">
            <x-textinput text="身高" name="height" :value="$data->height??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="饮食习惯" name="ysxg" :value="$data->ysxg??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="用眼习惯" name="yyxg" :value="$data->yyxg??''"/>
        </div>
    </div>
    <x-textinput text="家庭病史" name="jtbs" :value="$data->jtbs??''"/>
    <x-textinput text="现病史" name="xbs" :value="$data->xbs??''"/>
    <x-textinput text="首诊时间" type="date" name="first_time" :value="$data->first_time??''"/>
</div>