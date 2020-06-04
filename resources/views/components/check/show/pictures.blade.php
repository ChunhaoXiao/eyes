@if(!empty($datas['path']))
<div class="container">
    <h3 class="m-2">{{$title??''}}</h3>
    <div class="row pl-4">
       
        @foreach($datas['path'] as $k =>  $v)
            <div style="width:150px" class="d-flex flex-column m-1">
                <a href="{{asset('storage/'.$v)}}" data-lightbox="{{$v}}"><img src="{{asset('storage/'.$v)}}" alt="" width="150" height="150"></a>
                <div>
                    {{$datas['text'][$k]}}
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endif