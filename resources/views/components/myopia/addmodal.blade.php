<div class="modal fade" id="add_myopia" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalScrollableTitle">添加近视治疗记录</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="" id="myopia_form">
        <p class="font-weight-bold">卡项</p>
        <x-textinput text="次数" name="kx_count"/>
        <x-textinput text="金额" name="kx_amount"/>

        <x-textinput text="开始日期" type="date" name="kx_date_start"/>

        <x-textinput text="结束日期" type="date" name="kx_date_end"/>
        <x-textinput text="金额" name="kx_amount_1"/>
        <p class="font-weight-bold">种类</p>
        <x-textinput text="中医经络点穴" name="kx_zyjldx"/>
        <x-textinput text="仪器训练" name="kx_yqxl" />
        <x-textinput text="治疗方案" name="kx_zlfa" />
        <x-textinput text="医师" name="kx_doctor"/>
       
      </form>

        
      </div>
      <div class="modal-footer">
        <p id="error"></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" id="myopia">保存</button>
      </div>
    </div>
  </div>
</div>


<script type="module">

  $("#myopia").on('click', function() {
    
    const data = $("#myopia_form").serialize()
    

    $.ajax({
      
      url:"{{ route('user.myopias.store', ['user' => $user, 'table' => $table]) }}",
      data:data,
      type:'post',
      success:res => {
       // console.log(res)
        $("#error").removeClass('text-danger').addClass('text-success').html('添加成功');
        setTimeout(function(){
          $("#add_myopia").modal('hide')
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