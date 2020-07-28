<x-section-title title="病史"></x-section-title>
<div class="container pt-2">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <x-formtext  text="主诉" name="zs" labelcol="1" :value="$data->zs??''"/>
    <x-formtext  text="既往史" name="jws1" labelcol="1" :value="$data->jws1??''"/>
    <x-formtext  name="jzs" text="家族史" labelcol="1" :value="$data->jzs??''"/>

    <x-checkbox text="视力" :options="App\Models\History::EYE_DISEASE" name="jws[]" :checked="$data->jws??[]" labelcol="1"/>

    <x-formtext name="gms" text="过敏史" :value="$data->gms??''" labelcol="1"/>

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
    <x-formtext text="最近一次配镜时间" name="pjsj" type="date" :value="$data->pjsj??''" labelcol="2"/>
    <x-formtext text="以为采用的矫治方法" name="ywff" :value="$data->ywff??''" labelcol="2"/>
</div>


    