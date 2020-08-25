@extends('home.layout')

@section('content')
<div class="myopia">
  <x-home.case.check.shili :data="$data"/>
  <x-home.case.check.outeye :data="$data"/>
  <x-home.case.check.eyepos :data="$data"/> 
  <x-home.case.check.sgn :info="$data" /> 
  <x-home.case.check.qgjz :data="$data"/>
  <x-home.case.check.yandi :data="$data"/>
  <x-home.case.check.zhushi :data="$data"/>
  <x-home.case.check.yanya :data="$data"/>
  <x-home.case.check.leiye :data="$data"/>
  <x-home.case.check.ctyg :data="$data"/>
  <x-home.case.check.styg :data="$data"/>
  <x-home.case.check.tsj :data="$data"/>
  <x-home.case.check.jmql :data="$data"/>
  <x-home.case.check.jmdxt :data="$data"/>
  <x-home.case.check.swcl :data="$data"/>
  <x-home.case.check.other :data="$data"/>

  <x-home.case.check.pictures :pictures="$data->map['path']" title="地形图"/>
  <x-home.case.check.pictures :pictures="$data->shengwu['path']" title="生物测量"/>
  <x-home.case.check.pictures :pictures="$data->fuzhen['path']" title="复诊"/>
  <x-home.case.check.pictures :pictures="$data->yandi['path']" title="眼底图"/>


</div>   

            
@endsection