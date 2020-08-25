<div class="modal fade" id="add_comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalScrollableTitle">添加{{$user->name}}的备注</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="" id="comment_form">
      <x-textarea text="医生备注" rows=10 name="c_comments"/>
       <x-textinput text="日期" type="date" name="c_date"/>
       <input type="hidden" name="id">
      </form>

        
      </div>
      <div class="modal-footer">
        <p id="error"></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" id="comments">保存</button>
      </div>
    </div>
  </div>
</div>


<script type="module">

  $("#comments").on('click', function() {
    
    const data = $("#comment_form").serialize()
    const id = $("input[name=id]").val();

    $.ajax({
      
      url:id? "/admin/comments/"+id : "{{ route('user.comments.store', $user) }}",
      data:data,
      type:id? 'put' : 'post',
      success:res => {
       // console.log(res)
        $("#error").removeClass('text-danger').addClass('text-success').html('添加成功');
        setTimeout(function(){
          $("#add_record").modal('hide')
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