<x-section-title title="泪液"/>

<div class="container">
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>泪液量</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="ly_lyl_r" :value="$data->ly_lyl_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="ly_lyl_l" :value="$data->ly_lyl_l??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>破裂时间</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="ly_plsj_r" :value="$data->ly_plsj_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="ly_plsj_l" :value="$data->ly_plsj_l??''"/>
        </div>
    </div>
</div>