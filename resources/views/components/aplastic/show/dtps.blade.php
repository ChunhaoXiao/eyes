<div class="container mt-3">
  <h3>配适测试动态配适</h3>
  <x-display-item label="中心定位">
    <div class="row">
      <div class="col-sm-auto">
        OD: {{$data->spcs_zxdw_od??''}}
      </div>
      <div class="col-sm-auto">
        OS: {{$data->spcs_zxdw_os??''}}
      </div>
    </div>
  </x-display-item>

  <x-display-item label="活动度">
    <div class="row">
      <div class="col-sm-auto">
        OD: {{$data->spcs_hdd_od??''}}
      </div>
      <div class="col-sm-auto">
        OS: {{$data->spcs_hdd_os??''}}
      </div>
    </div>
  </x-display-item>
  <x-display-item label="移动类型">
    <div class="row">
      <div class="col-sm-auto">
        OD: {{$data->spcs_ydlx_od??''}}
      </div>
      <div class="col-sm-auto">
        OS: {{$data->spcs_ydlx_os??''}}
      </div>
    </div>
  </x-display-item>
</div>