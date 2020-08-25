
<x-section-title title="消费记录">
<!-- <div class="" style="font-size:18px" id="create_consume" data-toggle="modal" data-target="#myModal"><a class="pe-7s-note" href="javascript:;"></a></div> -->
<a style="font-size:18px" class="text-secondary" data-type="consume" href="javascript:;"><i class="fa fa-fw" aria-hidden="true" title="添加消费记录"></i></a>
</x-section-title>
    
    <div class="container pt-2">
    @if($data->isNotEmpty())
    <div class="row"> 
         <div class="col-sm">
        <table class="table table-bordered table-responsive-md table-sm">
          
            <tr>
               <th scope="col">就诊时间</th>
               <th scope="col">消费金额</th>
               <th scope="col">消费类型</th>
               <th scope="col">商品类型</th>
               <th scope="col">消费备注</th>
               <th scope="col">就诊医院</th>
               <th></th>
            </tr>

            @foreach($data as $v)
                <tr>
                    <td>{{ $v->apptime->toDateString() }}</td>
                    <td>{{ $v->price }} 元</td>
                    <td>{{ $v->consume_type->name??'' }}</td>
                    <td>{{ $v->product->name??'' }}</td>
                    <td> {{ $v->content }}</td>
                    <td>{{ $v->shop->title }}</td>
                    <th>
                        <a data-type="consume" class="text-secondary" href="javascript:;" data-url="{{route('admin.consume.show', $v)}}"><i class="fa fa-fw" aria-hidden="true" title="编辑"></i></a>

                        <a href="javascript:;" data-type="delete" data-url="{{route('admin.consume.destroy', $v)}}" class="font-icon-wrapper"><i style="font-size:16px;color:grey" class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i></a>
                    </th>
                </tr>
            @endforeach
                <tr>
                
                <th colspan="7">消费合计:{{$data->sum('price')}}元</th>
                </tr>
            
        </table>
        </div>
    </div>
    @else
    <div class="text-secondary">暂无消费记录数据</div>
    @endif
    </div>
   

 <script type="module">
  $("a[data-type=consume]").on('click', function(e) {
    const  date = "{{now()->toDateString()}}"
    const shopid = "{{$user->shopid}}";  
    $("#add_consume").modal()
    $("input[name=id]").val(0)
    $("input[name=apptime]").val(date);
    $("input[name=price]").val("")
    $("#shopids").val(shopid).select2()

    $("#consumption_type_id").val("").select2()
    $("#product_type_id").val("").select2()
    $("input[name=content]").val("")

    const url = $(this).data('url');
    if(url) {
        $.ajax({
            url:url,
            success:res => {
                console.log(res);
                $("input[name=apptime]").val(res.add_date);
                $("input[name=price]").val(res.price)
                $("#shopids").val(res.shopid).select2()

                $("#consumption_type_id").val(res.comsumption_type_id).select2()
                $("#product_type_id").val(res.product_type_id).select2()
                $("input[name=content]").val(res.content)
                $("input[name=id]").val(res.id)
            }
        })
    }
  })
</script>