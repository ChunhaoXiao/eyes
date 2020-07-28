<div class="container mt-3">
  <h3>配适测试静态配适</h3>
  <x-display-item label="基弧">
    <div class="row">
      <div class="col-sm-auto">
        OD: {{$data->spcs_jh_od??''}}
      </div>
      <div class="col-sm-auto">
        OS: {{$data->spcs_jh_os??''}}
      </div>
    </div>
  </x-display-item>

  <x-display-item label="反转弧">
    <div class="row">
      <div class="col-sm-auto">
        OD: {{$data->spcs_fzh_od??''}}
      </div>
      <div class="col-sm-auto">
        OS: {{$data->spcs_fzh_os??''}}
      </div>
    </div>
  </x-display-item>
  <x-display-item label="配适弧">
    <div class="row">
      <div class="col-sm-auto">
        OD: {{$data->spcs_sph_od??''}}
      </div>
      <div class="col-sm-auto">
        OS: {{$data->spcs_sph_os??''}}
      </div>
    </div>
  </x-display-item>
  <x-display-item label="戴镜视力">
    <div class="row">
      <div class="col-sm-auto">
        OD: {{$data->spcs_djsl_od??''}}
      </div>
      <div class="col-sm-auto">
        OS: {{$data->spcs_djsl_os??''}}
      </div>
    </div>
  </x-display-item>
</div>