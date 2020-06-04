@props(['user'])
<div class="modal fade" id="add_call" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="margin-top:10%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">添加与用户<b>{{$user->name}}</b>的回访</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <textarea  id="callback_content" rows="6" class="form-control"></textarea>
      </div>
      <div class="modal-footer">
          <p id="msg"></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="call_submit" disabled>确定</button>
      </div>
    </div>
  </div>
</div>

<script type="module">
    
    $("#callback_content").on('keyup', function(e) {
        $("#call_submit").attr('disabled', $(this).val().length < 3)
    })

    $("#call_submit").on('click', function() {
        const content = $("#callback_content").val();
        $.ajax({
            url:"{{ route('admin.callback.store', $user) }}",
            type:'post',
            data:{content:content},
            success: res => {
                console.log(res);
                $("#msg").html('添加成功')
                setTimeout(function(){
                    $('#add_call').modal('hide')
                    location.reload()
                }, 500)
               
            }
        })
    })
</script>
