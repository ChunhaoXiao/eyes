<h3>生物测量</h3>
<div class="container">
    @foreach(App\Models\Check::SWCL as $k => $v)
    <div class="row">
      <label for="" class="col-sm-auto col-form-label">{{$v}}</label>
      <div class="col-sm"><x-textinput text="右眼" :name="$k.'_r'" :value="$data->{$k.'_r'}??''"/></div>
      <div class="col-sm"><x-textinput  text="左眼" :name="$k.'_l'" :value="$data->{$k.'_l'}??''"/></div>
    </div>
    @endforeach
</div>