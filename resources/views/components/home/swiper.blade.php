<div class="swiper-container ss">
    <div class="swiper-wrapper">
        @foreach($banners as $v) 
        <div class="swiper-slide"><img src="{{asset('storage/'.$v->picurl)}}" alt=""></div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>