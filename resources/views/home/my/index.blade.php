@extends('home.layout')

@section('content')
	
<div class="personal">
    <h1>个人中心</h1>
    <div class="per-pic">
        
        <img src="{{ Auth::user()->headimgurl}}" alt="">
       
        <!-- <p>{$info.name}</p> -->
        <p>{{Auth::user()->name??''}}</p>
    </div>
</div>
<ul class="per-ul">
    <a href="{{ route('customerinfo.index') }}"><li>个人信息</li></a>
    <a href="{{ route('case.index') }}"><li>我的病志</li></a>
    <a href="{:url('/home/index/cardlist')}"><li>我的治疗卡</li></a>
    <a href="{:url('/home/index/recordlist')}"><li>我的消费信息</li></a>
</ul>

@endsection