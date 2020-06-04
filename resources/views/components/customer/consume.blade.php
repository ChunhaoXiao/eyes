
    <h3>消费记录<button type="button" class="ml-auto btn btn-layout-sucess" id="create_consume">添加</button></h3>
    <div class="container">
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
            </tr>
           

            
                @foreach($data as $v)
                    <tr>
                        <td>{{ $v->apptime->toDateString() }}</td>
                        <td>{{ $v->price }}</td>
                        <td>{{ $v->consume_type->name??'' }}</td>
                        <td>{{ $v->product->name??'' }}</td>
                        <td> {{ $v->content }}</td>
                        <td>{{ $v->shop->title }}</td>
                    </tr>
                @endforeach
            
        </table>
        </div>
    </div>
    </div>

 <script type="module">
  $("#create_consume").on('click', function() {
    $("#add_consume").modal()
  })
</script>