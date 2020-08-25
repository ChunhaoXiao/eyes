@extends('home.layout')

@section('content')

    <x-home.expertnav :currentarea="$area"/>

    <ul class="experts" id="new_list">
    @foreach($datas as $v)
	    <a href="{{route('expert.show', $v)}}">
	        <li>
	            <img src="{{asset('storage/'.$v->picurl)}}" alt="">
	            <div class="experts-txt">
	                <h1>{{ $v->title }}</h1>
	                <div class="miaosu">
	                    <span>{{ $v->academic }}</span>
	                    <span>{{$v->administration}}</span>
	                </div>
	                <div class="exocn">
	                    {{ $v->intro }}
	                </div>
	            </div>
	        </li>
	     </a>
    @endforeach
    <br class="cl">
    <!-- <a  id="more">查看更多</a> -->
    </ul>
@endsection