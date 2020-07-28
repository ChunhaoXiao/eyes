<h3>散瞳眼光</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>小孔视力</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="styg_xgsl_r" :value="$data->styg_xgsl_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="styg_xgsl_l" :value="$data->styg_xgsl_l??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>屈光度</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="styg_qgd_r" :value="$data->styg_qgd_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="styg_qgd_l" :value="$data->styg_qgd_l??''"/>
        </div>
    </div>
    
</div>