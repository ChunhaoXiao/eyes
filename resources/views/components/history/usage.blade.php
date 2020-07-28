 <x-section-title :title="$title"/>
<div class="container">
    
    <div class="row form-group">
      <div class="col-sm">
        <x-inputgroup label="每晚学习用眼时间" name="night_study_time" unit="小时" type="number" :value="$data->night_study_time??''"/>
      </div>
      <div class="col-sm">
        <x-inputgroup label="两次用眼间隔时间" name="use_eye_two_time" unit="分钟" type="number" :value="$data->use_eye_two_time??''"/>
      </div>
      <div class="col-sm">
        <x-inputgroup label="读书距离" name="see_book_size" unit="厘米" type="number" :value="$data->see_book_size??''"/>
      </div>
    </div>
    <div class="row">
       <div class="col-sm">
         <x-sbox label="是否用护眼灯" name="is_use_eyelight" :checked="$data->is_use_eyelight??''" value="1"/>
       </div>
       <div class="col-sm">
         <x-sbox label="是否坐、躺、走看书" name="is_mutil_see_book" :checked="$data->is_mutil_see_book??''" value="1"/>
       </div>
       <div class="col-sm">
        <x-textinput text="业余班有" name="yub" :value="$data->yub??''"/>
       </div>
    </div>
    <div class="container pb-2">
    <x-radio text="每周用电脑时长" :checked="$data->see_view??1" :options="App\Models\History::SEE_VIEWS" name="see_view" />
    </div>
    
    <div class="form-group row">
     <div class="col-sm"><x-textinput text="免疫功能" name="mygn" :value="$data->mygn??''"/></div>
     <div class="col-sm"><x-textinput text="卫生状况" name="wszk" :value="$data->wszk??''"/></div>
     <div class="col-sm"><x-textinput text="依从性" name="yccx" :value="$data->yccx??''"/></div>
    </div>
</div>