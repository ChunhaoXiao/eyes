<h3>验片记录</h3>
<div class="container">
    <div class="row">
        <div class="col-sm">
          <x-textinput text="订单号" name="ypjl_ddbh" :value="$data->ypjl_ddbh??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="收片日期" type="date" name="ypjl_sp_time" :value="$data->ypjl_sp_time??''"/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
          <x-textinput text="验片人" name="ypjl_user" :value="$data->ypjl_user??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="验片日期" type="date" name="ypjl_date" :value="$data->ypjl_date??''"/>
        </div>
    </div>
    <p class="font-weight-bold">加工质量:</p>
    <div class="pl-3">
      <x-radio  text="表面划痕" name="jgzl_bmhh" :options="[1 => '是', 2 => '否']" :checked="$data->jgzl_bmhh??1"/>
      <x-radio  text="边缘缺损" name="jgzl_byqs" :options="[1 => '是', 2 => '否']" :checked="$data->jgzl_byqs??1"/>
      <x-radio  text="表面光滑" name="jgzl_bmgh" :options="[1 => '是', 2 => '否']" :checked="$data->jgzl_bmgh??1" /> 
      <x-radio  text="边缘光滑" name="jgzl_bygh" :options="[1 => '是', 2 => '否']" :checked="$data->jgzl_bygh??1"/>           
    </div>
    <p class="font-weight-bold">验片试戴：</p>
    <div class="pl-3">
        <div class="row">
            <label class="col-sm-2 col-form-label">戴镜视力</label>
            <div class="col-sm"><x-textinput text="右眼" name="ypsd_dzsl_r" :value="$data->ypsd_dzsl_r??''"/></div>
            <div class="col-sm"><x-textinput text="左眼" name="ypsd_dzsl_l" :value="$data->ypsd_dzsl_l??''" /></div>
        </div>
        <div class="row">
            <label class="col-sm-2 col-form-label">居中性</label>
            <x-radio text="右眼" name="ypsd_jzx_r" :options="[1 => '是', 2 => '否']" :checked="$data->ypsd_jzx_r??1"/>
        </div>
        <div class="row">
            <label class="col-sm-2 col-form-label"></label>
            <x-radio text="左眼" name="ypsd_jzx_l" :options="[1 => '是', 2 => '否']" :checked="$data->ypsd_jzx_l??1"/>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label">活动度MM</label>
            <x-radio text="右眼" name="ypsd_dddmm_r" :options="App\Models\Aplastic::HDDMM" :checked="$data->ypsd_dddmm_r??1"/>
        </div>
        <div class="row">
            <label class="col-sm-2 col-form-label"></label>
            <x-radio text="左眼" name="ypsd_dddmm_l" :options="App\Models\Aplastic::HDDMM" :checked="$data->ypsd_dddmm_l??1"/>
        </div>
        <div class="row">
            <label class="col-sm-2 col-form-label">荧光染色评估</label>
            <x-radio text="右眼" name="ypsd_ygsepg_r_1" :options="App\Models\Aplastic::YGRSPG" :checked="$data->ypsd_ygsepg_r_1??1"/>
        </div>
        <div class="row">
            <label class="col-sm-2 col-form-label"></label>
            <x-radio text="左眼" name="ypsd_ygsepg_l_1" :options="App\Models\Aplastic::YGRSPG" :checked="$data->ypsd_ygsepg_l_1??1"/>
        </div>
        <div class="row">
            <label class="col-sm-2 col-form-label">结论</label>
            <x-radio text="" name="ypsd_ygsepg_l" :options="[1 => '可以交付', 2 => '不可以交付']" :checked="$data->ypsd_ygsepg_l??1"/>
        </div>

    </div>
   
</div>