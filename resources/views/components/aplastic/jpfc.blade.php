<x-section-title title="镜片复查"/>

<div class="container">
    <div class="row">
        <label for="" class="col-sm-1">表面状况</label>
        <div class="col-sm-1">右眼</div>

        <x-checkbox :options="App\Models\Aplastic::BIAOMIAN" name="bmzk_r[]" :checked="$data->bmzk_r??[]"/>
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-1"></label>
        <div class="col-sm-1">左眼</div>
        <x-checkbox :options="App\Models\Aplastic::BIAOMIAN" name="bmzk_l[]" :checked="$data->bmzk_l??[]"/>
    </div>

    <div class="row">
        <label for="" class="col-sm-1">边缘状况</label>
        <div class="col-sm-auto">右眼</div>
        <x-checkbox :options="App\Models\Aplastic::BIANYUAN" name="byzk_r[]" :checked="$data->byzk_r??[]"/>
    </div>
    <div class="row mb-3">
        <label for="" class="col-sm-1"></label>
        <div class="col-sm-auto">左眼</div>
        <x-checkbox :options="App\Models\Aplastic::BIANYUAN" name="byzk_l[]" :checked="$data->byzk_l??[]"/> 
    </div>

    <div class="row">
        <label for="" class="col-sm-auto col-form-label">是否已过期</label>
        <div class="col-sm">
            <x-radio text="右眼" name="jmfc_sfyjgq_r" :options="[1 => '是', 2 => '否']" :checked="$data->jmfc_sfyjgq_r??1"/>
        </div>
    </div>

    <div class="row">
        <label for="" class="col-sm-1 col-form-label"></label>
        <div class="col-sm ml-2">
            <x-radio text="左眼" name="jmfc_sfyjgq_l" :options="[1 => '是', 2 => '否']" :checked="$data->jmfc_sfyjgq_l??1"/>
        </div>
    </div>
    
    <div class="row mt-3">
        <label for="" class="col-sm-1">处置</label>
        <div class="col-sm-auto">右眼</div>
        <x-checkbox :options="App\Models\Aplastic::CHUZHI" name="chuzhi_r[]" :checked="$data->chuzhi_r??[]" />
    </div>

     <div class="row mb-3">
          <label for="" class="col-sm-1"></label>
          <div class="col-sm-auto">左眼</div>
          <x-checkbox :options="App\Models\Aplastic::CHUZHI" name="chuzhi_l[]" :checked="$data->chuzhi_l??[]" />    
     </div>
     @foreach(App\Models\Aplastic::FUCHA_QUESTION as $k => $v)
     <div class="row">
         <div class="col-sm">
           <x-radio :text="$v" :name="$k" :options="[1 => '是', 2=> '否']" :checked="$data->$k??''" col="3"/>
         </div>
        
     </div>
     @endforeach
</div>