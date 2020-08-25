<div class="track">
    <div class="title">
        <img src="{{asset('images/title_01.png') }}" alt="">
    </div>
    <ul class="track-icon">
        @foreach($datas as $v)
        <a href='{{url($v->url)}}'>
            <li>
                <div>
                    <img src="{{ asset('storage/'.$v->picurl) }}" alt="">
                </div>
                <p>{{$v->title}}</p>
            </li>
         </a>
         @endforeach
    </ul>
</div>