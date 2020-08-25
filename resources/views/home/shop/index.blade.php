@extends('home.layout')

@section('content')

    <ul id="new_list" class="store-list">
	    @foreach($datas  as $v)
	        <a href="{{ route('shop.show', $v) }}">
	            <li>
	                <img src="{{ asset('storage/'.$v->picurl) }}" alt="">
	                <div class="store-txt">
	                    <h1>{{ $v->title }}</h1>
	                    <div>{{ Str::limit($v->intro, 85) }}</div>
	                </div>
	            </li>
	        </a>
	    @endforeach
    <br class="cl">
    <!-- <a  id="more">查看更多</a> -->
    </ul>
@endsection