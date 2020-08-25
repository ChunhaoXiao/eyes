<div class="jiaosu">
    <h3>历史订单</h3>
    
    @foreach($orders as $order)
        <div class="js_od">
            <x-home.case.plasticitem label="订单号" :value="$order->order_number??''"/>
            <x-home.case.plasticitem label="日期" :value="$order->create_time??''"/>
            <x-home.case.plasticitem label="订片人" :value="$order->receiver??''"/>
            <x-home.case.plasticitem label="订片方式" :value="$order->send_method == 1?'电邮':'传真'"/>
            <x-home.case.plasticitem label="品牌" :value="$order->brand->name??''"/>
        </div>
        <div>订片参数</div>
        <div class="js_od">
            <div class="js_item">
                <span class="js_txt">编号(右)：</span><span class="js-box">{{$order->lens_no_r ?? ''}}</span>
                 <span class="js_txt">编号(左)：</span><span class="js-box">{{ $order->lens_no_l ?? ''}}</span>
            </div>
        </div>
        <div class="js_od">
            <div class="js_item">
                <span class="js_txt">基弧(右)：</span><span class="js-box">{{$order->curve_r ?? ''}}</span>
                 <span class="js_txt">基弧(左)：</span><span class="js-box">{{ $order->curve_l ?? ''}}</span>
            </div>
        </div>

        <div class="js_od">
            <div class="js_item">
                <span class="js_txt">颜色(右)：</span><span class="js-box">{{$order->color_r ?? ''}}</span>
                 <span class="js_txt">颜色(左)：</span><span class="js-box">{{ $order->color_l ?? ''}}</span>
            </div>
        </div>
        <div class="js_od">

            <div class="js_item">
                <span class="js_txt">厚度(右)：</span><span class="js-box">{{ $order->thick_r ?? ''}}</span>
                 <span class="js_txt">厚度(左)：</span><span class="js-box">{{ $order->thick_l ?? ''}}</span>
            </div>
        </div>
        <div class="js_od">
            <div class="js_item">
                <span class="js_txt">特殊要求(右)：</span><span class="js-box">{{ $order->special_r ?? ''}} </span>
                 <span class="js_txt">特殊要求(左)：</span><span class="js-box">{{ $order->special_l ?? ''}}</span>
            </div>
        </div>
        
        <!-- <div style="height: 10px;border-bottom: 2px dashed #C6C6C6; margin-bottom: 10px"></div> -->
    @endforeach

</div>