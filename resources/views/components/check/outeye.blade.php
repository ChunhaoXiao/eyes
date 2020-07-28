<x-section-title title="外眼"/>
<div class="container">
    
  <div class="row">
    <div class="col-sm-2 col-form-label"><b>眼睑</b></div>
    <div class="col-sm-3"><x-textinput text="右眼" name="sl_wy_yl_r" :value="$data->sl_wy_yl_r??''"/></div>
    <div class="col-sm-3"><x-textinput text="左眼" name="sl_wy_yl_l" :value="$data->sl_wy_yl_l??''"/></div>
  </div>
  <div class="row">
    <div class="col-sm-2 col-form-label"><b>结膜</b></div>
    <div class="col-sm-3"><x-textinput text="右眼" name="sl_wy_jm_r" :value="$data->sl_wy_jm_r??''"/></div>
    <div class="col-sm-3"><x-textinput text="左眼" name="sl_wy_jm_l" :value="$data->sl_wy_jm_l??''"/></div>
  </div>
</div>