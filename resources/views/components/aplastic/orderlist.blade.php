<div class="container">
    <p><span>订单列表</span><button class="btn btn-layout-info" id="order_create"> 添加订单</button></p>

    @foreach($user->aplastic_datas()->with('brand')->get() as $v )
        <table class="table table-bordered mb-4">
            <tr>
                <td rowspan="2" style="width:15%">基本信息</td>
                <td class="bg-secondary text-white"></td>
                <td  class="bg-secondary text-white">日期</td>
                <td  class="bg-secondary text-white">订单号</td>
                <td  class="bg-secondary text-white">订片人</td>
                <td  class="bg-secondary text-white">订单方式</td>
                <td  class="bg-secondary text-white">品牌</td>
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
                <td class="bg-secondary text-white"></td>
                <td class="bg-secondary text-white">标准片编号</td>
                <td class="bg-secondary text-white">基弧</td>
                <td class="bg-secondary text-white">颜色</td>
                <td class="bg-secondary text-white">厚度</td>
                <td class="bg-secondary text-white">特殊要求</td>
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
            <tr>
                <td colspan="7" class="text-right">
                    <a data-type="order" class="text-muted mr-4" href="javascript:;" data-url="{{route('aplasticdata.show', $v)}}"><i class="fa fa-fw" aria-hidden="true" title="编辑"></i></a>

                   <a href="javascript:;" data-type="delete" data-url="{{route('aplasticdata.destroy', $v)}}" class="text-secondary"><i style="font-size:16px;color:grey" class="fa fa-fw" aria-hidden="true" title="删除"></i></a>
                </td>
            </tr>
        </table>
    @endforeach

</div>
<script>
    $("#order_create, a[data-type=order]").on('click', function() {
        $("#add_order").modal();
        const url = $(this).data('url');
        const fields = @json(App\Models\AplasticData::ORDERFIELDS);
        console.log(fields)
        $(".form-control").val('')
        if(url) {
            $("input[name=send_method]").attr('checked', false);
            $.ajax({
                url:url,
                success:res => {


                    console.log(res)
                    $("input[name=order_number]").val(res.order_number)
                    $("input[name=receiver]").val(res.receiver);
                    $("input[name=id]").val(res.id);
                    $("input[name=send_method][value="+res.send_method+"]").attr('checked', 'checked');
                    $("#jingpian").val(res.brand_id).select2();
                    let name = Object.keys(fields);
                    name.map(item => {
                        $("input[name="+item+"_l]").val(res[item+'_l'])
                        $("input[name="+item+"_r]").val(res[item+'_r'])
                    })
                
                }
            })
        }
    });
</script>