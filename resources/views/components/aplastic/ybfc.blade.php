<h3>眼部复查</h3>
<div class="container">
    @foreach(App\Models\Aplastic::FUCHA as $k => $v)
    <div class="row">
      <label for="" class="col-sm-2 col-form-label">
        {{ $v }}
      </label>
      <div class="col-sm">
        <x-textinput text="右眼" :name="$k.'_r'" :value="$data->{$k.'_r'}??''"/>
      </div>
      <div class="col-sm">
        <x-textinput text="左眼" :name="$k.'_l'" :value="$data->{$k.'_l'}??''"/>
      </div>
    </div>
    @endforeach
    <div class="row">
        <label for="" class="col-sm-auto col-form-label">处置(根据角膜情况做出)</label>
        <div class="col-sm"><x-textinput text="右眼" name="ybfc_czgujmzk_r" :value="$data->ybfc_czgujmzk_r??''"/></div>
        <div class="col-sm"><x-textinput text="左眼" name="ybfc_czgujmzk_l" :value="$data->ybfc_czgujmzk_l??''" /></div>
    </div>

    <div class="row">
        <label for="" class="col-sm-auto col-form-label">处置(根据镜片适配度做出)</label>
        <div class="col-sm"><x-textinput text="右眼" name="ybfc_czgjzpspd_r" :value="$data->ybfc_czgjzpspd_r??''" /></div>
        <div class="col-sm"><x-textinput text="左眼" name="ybfc_czgjzpspd_l" :value="$data->ybfc_czgjzpspd_l??''"/></div>
    </div>
</div>