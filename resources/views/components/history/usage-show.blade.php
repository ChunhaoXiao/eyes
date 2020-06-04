<h3>用眼习惯</h3>
<div class="container">
  <x-display-item label="每晚学习用眼时间" :data="!empty($data->night_study_time)?$data->night_study_time.'小时':''"/>
  <x-display-item label="两次用眼时间间隔" :data="!empty($data->use_eye_two_time)?$data->use_eye_two_time.'分钟':''"/>
  <x-display-item label="读书距离" :data="!empty($data->see_book_size)?$data->see_book_size.'厘米':''"/>
  <x-display-item label="是否用护眼灯" :data="!empty($data->is_use_eyelight)?'是':'否'"/>
  <x-display-item label="是否坐、躺、走看书" :data="!empty($data->is_mutil_see_book)?'是':'否'"/>
  <x-display-item label="业余班" :data="$data->yub??''"/>
  <x-display-item label="每周用电脑时长" :data="$data->see_view_time"/>
  <x-display-item label="免疫功能" :data="$data->mygn??''"/>
  <x-display-item label="卫生状况" :data="$data->wszk??''"/>
  <x-display-item label="依从性" :data="$data->yccx??''"/>

</div>