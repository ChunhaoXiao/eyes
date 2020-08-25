<x-section-title title="眼科检查"/>
<div class="container">
    <div class="row">
        <label class="col-sm-1 col-form-label">
            裸眼
        </label>
        <div class="col-sm">
            <x-textinput text="右眼" name="luoyan_r" :value="$data->luoyan_r??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="左眼" name="luoyan_l" :value="$data->luoyan_l??''"/>
        </div>
    </div>

    <div class="row">
        <label class="col-sm-1 col-form-label">
            现镜矫正
        </label>
        <div class="col-sm">
            <x-textinput text="右眼" name="xjjz_r" :value="$data->xjjz_r??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="左眼" name="xjjz_l" :value="$data->xjjz_l??''"/>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-1 col-form-label">
            眼压
        </label>
        <div class="col-sm">
            <x-textinput text="右眼" name="yanya_r" :value="$data->yanya_r??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="左眼" name="yanya_l" :value="$data->yanya_l??''"/>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-1 col-form-label">
            眼睑
        </label>
        <div class="col-sm">
            <x-textinput text="上眼睑" name="yanjian_up" :value="$data->yanjian_up??''"/>
        </div>
        <div class="col-sm">
            <x-textinput text="下眼睑" name="yanjian_down" :value="$data->yanjian_down??''"/> 
        </div>
    </div>

    <x-formtext labelcol="1" text="睫毛" name="jiemao" :value="$data->jiemao??''"/>
    <x-formtext labelcol="1" text="结膜" name="jiemo" :value="$data->jiemo??''"/>
    <x-formtext labelcol="1" text="角膜" name="jiaomo" :value="$data->jiaomo??''"/>
        <div class="container pb-2">
        <x-radio text="泪河高度" name="height" :options="App\Models\Dryeye::HEIGHT" :checked="$data->height??1"/>
        </div>
    
    <x-formtext labelcol="1" text="泪液测试" name="leiye_test" :value="$data->leiye_test??''"/>
    <x-formtext labelcol="1" text="泪膜破裂时间" name="lmpl_time" :value="$data->lmpl_time??''"/>
    <x-formtext labelcol="1" text="螨虫检查" name="manchong_test" :value="$data->manchong_test??''"/>
    
    

</div>