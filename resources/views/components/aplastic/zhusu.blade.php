<x-section-title title="用户主诉"/>
<div class="container">
   
    
    <x-checkbox   name="zhusu[]" :checked="$data->zhusu??[]" :options="App\Models\Aplastic::ZHUSU"/>
   
    <div class="row form-group mt-3">
        <div class="col-sm">
        <x-textinput text="其它" name="yhzs_other_desc"/>
        </div>
    </div>
</div>