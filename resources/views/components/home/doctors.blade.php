<div class="introduction">
    <div class="title">
        <img src="{{asset('images/title_02.png')}}" alt="">
    </div>
    
    <ul class="intro-ul">
        @foreach($doctors as $v)
        <a href="{{ route('expert.show', $v)}}">
            <li>
                <img src="{{ asset('storage/'.$v->picurl) }}" alt="">
                <div class="intro-div">
                    <h1>{{$v->title}}</h1>
                    <p>{{$v->administration}}</p>
                </div>
            </li>
         </a>
        @endforeach
    </ul>
    
    <a href="{{route('expert.index')}}"><div class="more">查看更多</div></a>
</div>