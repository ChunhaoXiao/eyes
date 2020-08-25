@extends('home.layout')

@section('content')
	<div class="myopia">
        <h1>诊断处置</h1>

		
		    <div style="font-weight: 600">右眼</div>
		    <ul class="zhen_tabs" style="padding: 10px">
		    	<li> {{ $data->eye_right??'' }} </li>
		    </ul>
	    
	
		
		    <div style="font-weight: 600">左眼</div>
		     <ul class="zhen_tabs" style="padding: 10px">
		    	<li> {{ $data->eye_left??'' }} </li>
		    </ul>
		    
	   

	    <div class="mydeit">
	        <label for="info">其它：  </label>
	        <textarea class="form-control" rows="3" readonly>{{$data->other??'' }}</textarea>
	    </div>
	    <div class="mydeit">
	        <label for="info">处置：     </label>
	        <textarea class="form-control fctext" readonly>{{ $data->cz ?? ''}}</textarea>
	    </div>
	    <div class="mydeit mydeit2">
	        <label for="info">医生：</label>
	        <input type="text" class="form-control" id="info" value="{{$data->doctor ?? ''}}" readonly>
	    </div>
	    <div class="mydeit mydeit2">
	        <label for="date">日期：</label>
	        <input type="text" class="form-control" id="date" value="{{$data->cz_date ?? ''}}" readonly>
	    </div>
    </div>
@endsection