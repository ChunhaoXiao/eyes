
<h3>{{$title}}</h3>
<div class="container">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <x-textinput  text="主诉" name="zs" col="col-sm-2" :value="$data->zs??''"/>
    <x-textinput text="既往史" name="jws1" col="col-sm-2" :value="$data->jws1??''"/>
    <x-textinput name="jzs" text="家族史" col="col-sm-2" :value="$data->jzs??''"/>

    <x-checkbox text="视力" :options="App\Models\History::EYE_DISEASE" name="jws[]" :checked="$data->jws??[]"/>
    <x-text-input name="gms" text="过敏史" :value="$data->gms??''"/>

    <div class="row form-group">
        <div class="col-sm-1"></div>
        <div class="col-sm-auto">
        <x-sbox name="is_st"   label="是否有过散瞳" value="1" :checked="$data->is_st??''"/>
        <x-sbox name="is_pj"    value="1"  label="是否有过配镜" :checked="$data->is_pj??''"/>
        <x-sbox name="eyeclass_ok" :checked="$data->eyeclass_ok??''"  label="戴镜是否舒适" value="1"/>
        </div>
    </div>

    <div class="row from-group">
        <div class="col-sm-1">

        </div>
        <div class="col">
            <x-inputgroup label="多长时间换一次眼镜" unit="年" type="number" name="over_yj_time" :value="$data->over_yj_time??''"/>
        </div>
        <div class="col">
            <x-textinput text="配几幅" name="pj_count" type="number" :value="$data->pj_count??''"/>
        </div>
       
    </div>
    
    <div class="row form-group">
        <label class="col-auto col-form-label">
            目前眼镜度数
        </label>
        <div class="col-sm">
        <x-inline-input label="右眼" name="right_eye" type="number" :value="$data->right_eye??''"/>
        </div>
        <div class="col-sm">
        <x-inline-input label="左眼" name="left_eye" type="number" :value="$data->left_eye??''"/>
        </div>
    </div>
    <x-textinput text="最近一次配镜时间" name="pjsj" type="date" :value="$data->pjsj??''"/>
    <x-textinput text="以为采用的矫治方法" name="ywff" :value="$data->ywff??''"/>
</div>


    