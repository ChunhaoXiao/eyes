	@if(!empty($pictures))
	<div class="jia-box" style="margin-bottom:30px">

	    <h3>{{$title??''}}</h3>
	    @foreach ($pictures as $v)
	      <img src="{{ asset('storage/'.$v) }}" style="width: 100%;height: 100%; margin-top: 5px">
	    @endforeach
	</div>
	@endif
