
<h3>同视机</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>同时视</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="tsj_tsj_r" :value="$data->tsj_tsj_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="tsj_tsj_l" :value="$data->tsj_tsj_l??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>融合视</b></div>
        <div class="col-sm">
          <x-textinput text="融合" name="tsj_rhs_rh" :value="$data->tsj_rhs_rh??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="立体视" name="tsj_rhs_lts" :value="$data->tsj_rhs_lts??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="分开" name="tsj_rhs_fk" :value="$data->tsj_rhs_fk??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="网膜对应功能" name="tsj_rhs_wmdygn" :value="$data->tsj_rhs_wmdygn??''"/>
        </div>
    </div>
    
</div>