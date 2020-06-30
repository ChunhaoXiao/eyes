@props(['user'])
<div class="modal fade" id="add_consume" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="margin-top:10%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">给<b>{{$user->name}}</b>添加消费记录</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="consume_form">
           
            <x-formtext  text="消费时间" name="apptime" type="date"/>
            <x-formtext text="消费金额" name="price" type="number"/>
            
            <x-select labelcol="2" name="shopid" id="shopids" label="医院" source="shop" style="width: 200px;"/>
            <x-select labelcol="2" style="width:200px" name="comsumption_type_id" id="consumption_type_id" label="消费类型" source="consumption"/>
            <x-select labelcol="2" style="width:200px" name="product_type_id" id="product_type_id" label="商品类型" source="prod"/>
            <x-textinput text="消费备注" name="content" type="text"/>
            <input type="hidden" value="0" name="id">
        </form>
       
        <!-- <textarea  id="callback_content" rows="6" class="form-control"></textarea> -->
      </div>
      <div class="modal-footer">
          <p id="error" class="text-danger"></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="consume_submit">确定</button>
        
      </div>
    </div>
  </div>
</div>
<script type="module">
  $("#consume_submit").on('click', function() {
    
    const data = $("#consume_form").serialize()
    const id = $("#consume_form").find("input[name='id']").val();
   const user = "{{$user->id}}"
    $.ajax({
      
      url: id > 0 ? "/admin/consume/"+id : "/admin/"+user+"/consume",
      data:data,
      type:id > 0 ? 'put' : 'post',
      success:res => {
        console.log(res)
        $("#consume_form input").val('')
        $("#error").removeClass('text-danger').addClass('text-success').html('添加成功');
        setTimeout(function(){
          $("#add_consume").modal('hide')
          location.reload()
        }, 800)

        //console.log(res.code)
      },
      error:res => {
       
        const errors = res.responseJSON.errors
        const v = Object.values(errors)[0][0]
        console.log(v)
        $("#error").html(v)
      }
    })
  })

  $('#add_consume').on('hide.bs.modal', function (e) {
    $("#error").html('')
    $("#consume_form input").val('')

  })
</script>