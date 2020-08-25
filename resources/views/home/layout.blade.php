<x-home.header/>
<body>
    <x-home.search/>

    @yield('content')

    <!-- <div class="swiper-container ss">
        <div class="swiper-wrapper">
            {volist name='banner' id='bannerlist' key="k"}
            <div class="swiper-slide"><img src="/public/{$bannerlist['picurl']}" alt=""></div>
            {/volist}
        </div>
        <div class="swiper-pagination"></div>
    </div> -->

    <x-home.nav/>

    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    </script>
</body>