<div class="modal fade" id="add_plan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalScrollableTitle">添加治疗方案</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="" id="plan_form">
          <div class="row form-group">
            <div class="col-sm">
                <textarea class="form-control" name="content" id="plan" cols="30" rows="10"></textarea>
            </div>
          </div>
          
          <div class="row form-group mt-3">
              <div class="col-sm">
                <x-textinput text="医师" name="doctor" />
              </div>
          </div>
          
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
    
    const data = $("#plan_form").serialize()
    

    $.ajax({
      
      url:"{{route('plan.update', $user)}}",
      data:data,
      type:'put',
      success:res => {
       // console.log(res)
        $("#error").removeClass('text-danger').addClass('text-success').html('添加成功');
        setTimeout(function(){
          $("#add_plan").modal('hide')
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