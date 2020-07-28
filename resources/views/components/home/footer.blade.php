<div class="fot-box"></div>
<ul class="footer">
    @foreach($navdi as $v)
    @if(request()->path == $v->url)
    <li class="on">
        <a href="{:url($navlist.url)}"><img class="on1" src="{{ asset('storage/'.$v->picurl) }}" alt="">
            <img class="on2" src="{{asset('storage/'.$v->picurl02)}}" alt="">
            <p>{{$v->title}}</p></a>
    </li>
    @else
    <li>
        <a href="{:url($navlist.url)}"><img class="on1" src="{{ asset('storage/'.$v->picurl) }}" alt="">
            <img class="on2" src="{{asset('storage/'.$v->picurl02)}}" alt="">
            <p>{{$v->title}}</p></a>
    </li>
    @endif
    @endforeach
</ul>