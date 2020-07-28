<div class="swiper-container s1">
    @if($shops)
    <div class="swiper-wrapper">
        @foreach($shops as $v)
        <div class="swiper-slide simg">
            <a href="{:url('/home/index/shop')}?id={$shop.id}">
                <div class="simg-div">
                    <img src="{{ asset('storage/'.$v->picurl) }}" alt="">
                    <div class="sdiv">{{$v->title}}</div>
                </div>
             </a>
        </div>
        @endforeach

    </div>
    @endif
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>