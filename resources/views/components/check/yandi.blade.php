<h3>眼底</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>血管</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="yd_xg_r" :value="$data->yd_xg_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="yd_xg_l" :value="$data->yd_xg_l??''"/>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-auto col-form-label"><b>视乳头</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="yd_srt_r" :value="$data->yd_srt_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="yd_srt_l" :value="$data->yd_srt_l??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>视网膜</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="yd_swn_r" :value="$data->yd_swn_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="yd_swn_l" :value="$data->yd_swn_l??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>黄斑</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="yd_hb_r" :value="$data->yd_hb_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="yd_hb_l" :value="$data->yd_hb_l??''"/>
        </div>
    </div>
</div>