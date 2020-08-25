@extends('admin.customerlayout')
@section('form')

<div class="container">
  <a href="javascript:;" id="create_record" class="btn btn-secondary mb-2 border">添加内容 <span class="font-weight-bold">+</span></a>
</div>

    <div class="container">
      @foreach($user->records as $v)
        <div class="border p-2 mb-4">
          <x-record.item :data="$v"/>
        </div>
      @endforeach
    </div>
    <script>
    $("#create_record, a[data-type=edit]").on('click', function(e) {
        $("#add_record").modal();
        const url = $(this).data('url')
        $("#record_form input, #record_form textarea").val('');
        const date = "{{now()->format('Y-m-d')}}";
        //alert(date)
        $("input[name=r_date]").val(date)
        if(url) {
          //alert(url)
          $.ajax({
            url:url,
            success: res => {
              console.log(res)
              $("input[name=r_date]").val(res.rd_date)
              $("input[name=r_user]").val(res.r_user);
              $("textarea[name=r_info]").val(res.r_info)
              $("input[name=id]").val(res.id);
            }
          })
        }
    })
</script>
@endsection
<x-record.recordmodal :user="$user"/>
