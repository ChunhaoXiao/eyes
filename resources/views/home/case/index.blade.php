@extends('home.layout')

@section('content')
	<style>
	.entity li{
		height: 0.84rem;
		font-size: 0.26rem;
		line-height: 0.84rem;
		text-align: center;
		border-bottom: solid 1px #d2d2d2;
		background: url(__IMG__/icon_05.png) no-repeat right center;
		background-size: 0.14rem;
		background-position-x: 6rem;
		color: #000;
	}
</style>

<ul class="entity">
	@foreach(App\Models\Customer::NAV as $k => $v)
		<a href="{{ route('case.show', $k) }}"> <li>{{$v}}</li></a>
	@endforeach
	<!-- <a href="{:url('/home/index/customer')}"> <li>基本信息</li></a>
	<a href="{:url('/home/index/history')}"> <li>眼科病史</li></a>
	<a href="{:url('/home/index/check')}"><li>眼科检查</li></a>
	<a href="{:url('/home/index/handle')}"><li>诊断处置</li></a>
	<a href="{:url('/home/index/optician')}"><li>验光配镜</li></a>
	<a href="{:url('/home/index/aplastic')}"><li>角膜接触镜</li></a>
	<a href="{:url('/home/index/dryeye')}"><li>干眼症</li></a>
	<a href="{:url('/home/index/myopia')}"><li>近视治疗</li></a>
	<a href="{:url('/home/index/layzyeye')}"><li>斜弱视康复</li></a>
	<a href="{:url('/home/index/record')}"><li>复查记录</li></a> -->
	
		<!-- <a href="{:url('/home/index/comments')}"><li>医生备注</li></a> -->
	
</ul>
@endsection