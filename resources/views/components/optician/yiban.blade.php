<x-section-title title="一般情况"/>

<div class="container">
    <x-formtext text="职业描述" name="zyms" :value="$data->zyms??''" labelcol="1"/>
    <x-formtext text="身高" name="height" :value="$data->height??''" labelcol="1"/>
    <x-formtext text="饮食习惯" name="ysxg" :value="$data->ysxg??''" labelcol="1"/>
    <x-formtext text="用眼习惯" name="yyxg" :value="$data->yyxg??''" labelcol="1"/>
    
    <x-formtext text="家庭病史" name="jtbs" :value="$data->jtbs??''" labelcol="1"/>
    <x-formtext text="现病史" name="xbs" :value="$data->xbs??''" labelcol="1"/>
    <x-formtext text="首诊时间" type="date" name="first_time" :value="$data->first_time??now()->toDateString()" labelcol="1"/>
</div>