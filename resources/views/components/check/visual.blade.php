<h3>视力</h3>
<div class="container">
    
  <div class="row">
    <div class="col-sm-2 col-form-label"><b>裸眼</b></div>
    <div class="col-sm-3"><x-textinput text="右眼" name="sl_ly_r" type="number" :value="$data->sl_ly_r??''"/></div>
    <div class="col-sm-3"><x-textinput text="左眼" name="sl_ly_l" type="number" :value="$data->sl_ly_l??''"/></div>
  </div>
  <div class="row">
    <div class="col-sm-2 col-form-label"><b>云雾后</b></div>
    <div class="col-sm-3"><x-textinput text="右眼" name="sl_ywh_r" type="number" :value="$data->sl_ywh_r??''"/></div>
    <div class="col-sm-3"><x-textinput text="左眼" name="sl_ywh_l" type="number" :value="$data->sl_ywh_l??''"/></div>
  </div>
  <div class="row">
    <div class="col-sm-2 col-form-label"><b>现镜矫正:</b></div>
    <div class="col-sm-3"><x-textinput text="右眼" name="sl_xjjz_r" type="number" :value="$data->sl_xjjz_r??''"/></div>
    <div class="col-sm-3"><x-textinput text="左眼" name="sl_xjjz_l" type="number" :value="$data->sl_xjjz_l??''"/></div>
  </div>
</div>