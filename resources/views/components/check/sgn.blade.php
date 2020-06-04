<h3>双眼视功能</h3>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <x-textinput text="NRA" name="jc_sygn_nra" :value="$data->jc_sygn_nra??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="PRA" name="jc_sygn_pra" :value="$data->jc_sygn_pra??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="BCC" name="jc_sygn_bcc" :value="$data->jc_sygn_bcc??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>AMP</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="jc_sygn_amp_r" :value="$data->jc_sygn_amp_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="jc_sygn_amp_l" :value="$data->jc_sygn_amp_l??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="双眼" name="jc_sygn_amp_c" :value="$data->jc_sygn_amp_c??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <x-textinput text="AC/A" name="jc_sygn_ac_a" :value="$data->jc_sygn_ac_a??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="AF" name="jc_sygn_af" :value="$data->jc_sygn_af??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <x-textarea text="结论" rows="3" name="jc_result" :default="$data->jc_result??''"/>
        </div>
    </div>
</div>