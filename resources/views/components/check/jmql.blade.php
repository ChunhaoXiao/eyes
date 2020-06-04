
<h3>角膜曲率</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>右眼</b></div>
        <div class="col-sm">
          <x-textinput text="Hk" name="jmql_r_hk" :value="$data->jmql_r_hk??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="Vk" name="jmql_r_vk" :value="$data->jmql_r_vk??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>左眼</b></div>
        <div class="col-sm">
          <x-textinput text="HK" name="jmql_l_hk" :value="$data->jmql_l_hk??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="Vk" name="jmql_l_vk" :value="$data->jmql_l_vk??''"/>
        </div>
      
    </div>
    
</div>