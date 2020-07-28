<div class="container">
    <p><span>订单列表</span><button class="btn btn-layout-info" id="order_create"> 添加订单</button></p>

    @foreach($user->aplastic_datas()->with('brand')->get() as $v )
        <table class="table table-bordered">
            <tr>
                <td rowspan="2" style="width:15%">基本信息</td>
                <td class="bg-info"></td>
                <td  class="bg-info">日期</td>
                <td  class="bg-info">订单号</td>
                <td  class="bg-info">订片人</td>
                <td  class="bg-info">订单方式</td>
                <td  class="bg-info">品牌</td>
            </tr>
            <tr>
                <td></td>
                <td>{{$v->create_time}}</td>
                <td>{{$v->order_number}}</td>
                <td>{{$v->receiver}}</td>
                <td>{{$v->send_method==1?'电邮' : '传真'}}</td>
                <td>{{$v->brand->name }}</td>
            </tr>
            <tr>
                
                <td rowspan="3">镜片参数</td>
                <td class="bg-primary text-white"></td>
                <td class="bg-primary text-white">标准片编号</td>
                <td class="bg-primary text-white">基弧</td>
                <td class="bg-primary text-white">颜色</td>
                <td class="bg-primary text-white">厚度</td>
                <td class="bg-primary text-white">特殊要求</td>
            </tr>
            <tr> 
                <td>右</td>
                <td>{{ $v->lens_no_r }}</td>
                <td>{{ $v->curve_r }}</td>
                <td>{{ $v->color_r }}</td>
                <td>{{ $v->thick_r }}</td>
                <td>{{ $v->special_r }}</td>
            </tr>
            <tr> 
                <td>左</td>
                <td>{{ $v->lens_no_l }}</td>
                <td>{{ $v->curve_l }}</td>
                <td>{{ $v->color_l }}</td>
                <td>{{ $v->thick_l }}</td>
                <td>{{ $v->special_l }}</td>
            </tr>
        </table>
    @endforeach

</div>
<script>
    $("#order_create").on('click', function() {
        $("#add_order").modal();
    });
</script>