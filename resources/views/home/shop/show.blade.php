@extends('home.layout')

@section('content')

   <div class="store-show">
    <h1>{{$data->title}}</h1>
    <div class="stow">
        @if($data->picurl)
        <img src="{{ asset('storage/'.$data->picurl) }}" alt="">
        @endif

        {!! $data->content !!}
    </div>
    <div class="mar">
        <div class="mar-left">
            @if($data->picurl1)
            <img src="{{ asset('storage/'.$data->picurl1) }}" alt="">
            @endif
        </div>
        <div class="mar-right">
            <p><img src="__IMG__/icon_08.png" alt="">电话：{{ $data->tel }}</p>
            <p><img src="__IMG__/icon_09.png" alt="">地址：{{ $data->address }}</p>
        </div>
    </div>
</div>
@endsection