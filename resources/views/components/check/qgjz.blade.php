<h3>屈光间质</h3>
<div class="container">
    @foreach(App\Models\Check::QGJZ as $k => $v)
      @if(is_array($v))
        <div class="row">
          <div class="col-sm-auto col-form-label"><b>{{$v['text']}}</b></div>
          <div class="col-sm">
            @foreach($v['data'] as $f => $v1)
              <div class="row">
                <div class="col-sm"><x-textinput :text="'右眼'.$v1" :name="$v['field'].'_r_'.$f" :value="$data->{$v['field'].'_r_'.$f}??''"/></div>
                <div class="col-sm"><x-textinput :text="'左眼'.$v1" :name="$v['field'].'_l_'.$f" :value="$data->{$v['field'].'_l_'.$f}??''"/></div>
              </div>
            @endforeach
          </div>
        </div>
      @else
        <div class="row">
            <div class="col-sm-auto col-form-label"><b>{{$v}}</b></div>
            <div class="col-sm">
              <x-textinput text="右眼" :name="$k.'_r'" :value="$data->{$k.'_r'}??''"/>
            </div>
            <div class="col-sm">
              <x-textinput text="左眼" :name="$k.'_l'" :value="$data->{$k.'_l'}??''"/>
            </div>
        </div>
      @endif
    @endforeach
</div>