<div class="modal fade" id="add_order" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" id="prescribe_form">
           
            <div class="form-group row">
              <div class="col-sm">
                <x-textinput text="订单号" name="order_number"/>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm">
                <x-textinput text="订片人" name="receiver"/>
              </div>
            </div>
            
            <x-radio text="订单方式" :options="['1' => '电邮', '2' => '传真']" name="send_method"/>

            <x-select label="品牌" name="brand_id" source="corneal" id="jingpian" style="width:150px"/>
            <p class="font-weight-bold">订片参数：</p>

            @foreach(App\Models\AplasticData::ORDERFIELDS as $k => $v)
            <div class="row">
                <label for="" class="col-sm-auto col-form-label">{{$v}}</label>
                <div class="col-sm"><x-textinput text="右" :name="$k.'_r'"/></div>
                <div class="col-sm"><x-textinput text="左" :name="$k.'_l'"/></div>
            </div>
            @endforeach

            <!--  -->
        </form>

        
      </div>
      <div class="modal-footer">
        <p id="error"></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" id="prescribe">保存</button>
      </div>
    </div>
  </div>
</div>


<script type="module">

  $("#prescribe").on('click', function() {
    
    const data = $("#prescribe_form").serialize()
    

    $.ajax({
      
      url:"{{ route('user.aplasticdata.store', $user) }}",
      data:data,
      type:'post',
      success:res => {
        console.log(res)
        $("#error").removeClass('text-danger').addClass('text-success').html('添加成功');
        setTimeout(function(){
          $("#add_chufang").modal('hide')
          location.reload()
        }, 800)
      },
      error:res => {
       
        const errors = res.responseJSON.errors
        const v = Object.values(errors)[0][0]
        $("#error").html(v)
      }
    })
  })

  // $('#add_consume').on('hide.bs.modal', function (e) {
  //   $("#error").html('')
  //   $("#consume_form input").val('')

  // })
</script>