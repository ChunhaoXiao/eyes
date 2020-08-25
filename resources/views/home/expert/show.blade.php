@extends('home.layout')

@section('content')
   <div class="experts-show">
    @if($data->picurl)
      <img src="{{ asset('storage/'.$data->picurl) }}" alt="">
    @endif
    <div class="experts-span">
        <span>{{ $data->title }}</span>
        <span>{{ $data->academic }}</span>
        <span>{{ $data->administration }}</span>
    </div>
    <div class="ex_sjow">
        {!!@ $data->content !!}
    </div>
</div>
@endsection