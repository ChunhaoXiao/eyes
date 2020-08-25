<x-section-title title="常瞳验光"/>

<div class="container">
    <div class="row">
        <div class="col-sm-auto col-form-label"><b>插片度数</b></div>
        <div class="col-sm">
          <x-textinput text="右眼" name="ctyg_cpds_r" :value="$data->ctyg_cpds_r??''"/>
        </div>
        <div class="col-sm">
          <x-textinput text="左眼" name="ctyg_cpds_l" :value="$data->ctyg_cpds_l??''"/>
        </div>
    </div>
    
</div>