<x-section-title title="试戴片参数"/>
<div class="container">
    <div class="row form-group no-gutters">
        <label class="col-sm-auto col-form-label">
            <span class="font-weight-bold mr-1">OD </span>
        </label>
        <div class="col-sm">
          <x-textinput text="镜片编码" name="sdpgjl_sdcs_jpbm" :value="$data->sdpgjl_sdcs_jpbm??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="基弧" name="sdpgjl_sdcs_jh" :value="$data->sdpgjl_sdcs_jh??''"/> 
        </div>
        <div class="col-sm">
          <x-textinput text="直径" name="sdpgjl_sdcs_zj" :value="$data->sdpgjl_sdcs_zj??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="目标焦度" name="sdpgjl_sdcs_mbjd" :value="$data->sdpgjl_sdcs_mbjd??''"/>
        </div>
        <div class="col-sm">
        <x-textinput text="附加度" name="sdpgjl_sdcs_fjd" :value="$data->sdpgjl_sdcs_fjd??''"/>
        </div>
    </div>

    <div class="row form-group no-gutters">
        <label class="col-sm-auto col-form-label">
            <span class="font-weight-bold mr-1">OS</span>
        </label>
        <div class="col-sm">
          <x-textinput text="镜片编码" name="sdpgjl_os_sdcs_jpbm" :value="$data->sdpgjl_os_sdcs_jpbm??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="基弧" name="sdpgjl_os_sdcs_jh" :value="$data->sdpgjl_os_sdcs_jh??''"/> 
        </div>
        <div class="col-sm">
          <x-textinput text="直径" name="sdpgjl_os_sdcs_zj" :value="$data->sdpgjl_os_sdcs_zj??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="目标焦度" name="sdpgjl_os_sdcs_mbjd" :value="$data->sdpgjl_os_sdcs_mbjd??''"/>
        </div>
        <div class="col-sm">
        <x-textinput text="附加度" name="sdpgjl_os_sdcs_fjd" :value="$data->sdpgjl_os_sdcs_fjd??''"/>
        </div>
    </div>
</div>