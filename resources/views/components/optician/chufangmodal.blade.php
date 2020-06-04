<div class="modal fade" id="add_chufang" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">添加处方</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" id="prescribe_form">
            <x-textinput text="眼镜类型" name="yjlx"/>
            <div class="form-group row">
              <label class="col-sm col-form-label">球镜</label>
              <div class="col-sm-5">
                <x-textinput text="右眼" name="qiujing_r"/>
              </div>
              <div class="col-sm-5">
                <x-textinput text="左眼" name="qiujing_l"/>
             </div>
            </div>
            <div class="form-group row">
              <label class="col-sm col-form-label">柱镜</label>
              <div class="col-sm-5">
                <x-textinput text="右眼" name="zhujing_r"/>
              </div>
              <div class="col-sm-5">
                <x-textinput text="左眼" name="zhujing_l"/>
             </div>
            </div>
            <div class="form-group row">
              <label class="col-sm col-form-label">光轴</label>
              <div class="col-sm-5">
                <x-textinput text="右眼" name="guangzhou_r"/>
              </div>
              <div class="col-sm-5">
                <x-textinput text="左眼" name="guangzhou_l"/>
             </div>
            </div>
            <div class="form-group row">
              <label class="col-sm col-form-label">棱镜</label>
              <div class="col-sm-5">
                <x-textinput text="右眼" name="lengjing_r"/>
              </div>
              <div class="col-sm-5">
                <x-textinput text="左眼" name="lengjing_l"/>
             </div>
            </div>
            <div class="form-group row">
              <label class="col-sm col-form-label">底向</label>
              <div class="col-sm-5">
                <x-textinput text="右眼" name="dixiang_r"/>
              </div>
              <div class="col-sm-5">
                <x-textinput text="左眼" name="dixiang_l"/>
             </div>
            </div>
            <div class="form-group row">
              <label class="col-sm col-form-label">视力矫正</label>
              <div class="col-sm-5">
                <x-textinput text="右眼" name="jzsl_r"/>
              </div>
              <div class="col-sm-5">
                <x-textinput text="左眼" name="jzsl_l"/>
             </div>
            </div>
            <div class="form-group row">
              <label class="col-sm col-form-label">瞳距</label>
              <div class="col-sm-5">
                <x-textinput text="右眼" name="tongju_r"/>
              </div>
              <div class="col-sm-5">
                <x-textinput text="左眼" name="tongju_l"/>
             </div>
            </div>
            <div class="form-group row">
              <label class="col-sm col-form-label">总瞳距</label>
              <div class="col-sm-5">
                <x-textinput text="右眼" name="total_tongju_r"/>
              </div>
              <div class="col-sm-5">
                <x-textinput text="左眼" name="total_tongju_l"/>
             </div>
            </div>
            <x-select label="镜架品牌" source="glass" id="jingjia" name="jingjia_brand" style="width: 150px"/>
            <x-select label="镜片品牌" source="jingpian" id="jingpian" name="jingpian_brand"/>
            <x-textinput text="镜片价格" name="jingpian_price"/>
            <x-textinput text="镜架价格" name="jingjia_price"/>
            <x-textinput text="实收" name="total_price"/> 
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
   // alert(data)
    
    $.ajax({
      
      url:"{{ route('user.prescribe.store', $user) }}",
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