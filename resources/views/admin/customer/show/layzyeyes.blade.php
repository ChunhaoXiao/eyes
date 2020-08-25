@extends('admin.customerlayout')
@section('form')
<div class="container">
      <a href="javascript:;" id="create_myopia" class="btn btn-secondary mb-2 border">添加内容 <span class="font-weight-bold">+</span></a>
    </div>
    <div class="container">
    @foreach($user->layzyeyes as $v)
      <div class="border p-2 mb-4">
        <x-myopia.card :data="$v"/>
        <x-myopia.cate :data="$v"/>
        <p class="text-right">
        <a data-type="edit" class="text-muted mr-3" href="javascript:;" data-url="{{route('myopias.show', [$v, 'table' => 'layzyeye'])}}"><i class="fa fa-fw" aria-hidden="true" title="编辑"></i></a>

        <a href="javascript:;" data-type="delete" data-url="{{route('myopias.destroy', [$v, 'table'=>'layzyeye'])}}" class="text-secondary"><i style="font-size:16px;color:grey" class="fa fa-fw" aria-hidden="true" title="删除"></i></a>
        </p>
      </div>
      
    @endforeach
    </div>

    <script>
    $("#create_myopia, a[data-type=edit]").on('click', function(e) {
        $("#add_myopia").modal()

        const url = $(this).data('url');
        if(url) {
          $.ajax({
            url:url,
            success:res => {
              console.log(res);
              $("input[name=kx_count]").val(res.kx_count);
              $("input[name=kx_amount]").val(res.kx_amount);
              $("input[name=kx_date_start]").val(res.kx_date_start);
              $("input[name=kx_date_end]").val(res.kx_date_end);
              $("input[name=kx_amount_1]").val(res.kx_amount_1)

              $("input[name=kx_zyjldx]").val(res.kx_zyjldx);
              $("input[name=kx_yqxl]").val(res.kx_yqxl)
              $("input[name=kx_zlfa]").val(res.kx_zlfa)
              $("input[name=kx_doctor]").val(res.kx_doctor)

              $("input[name=id]").val(res.id);
            }
          })
        }
    })
</script>
@endsection
<x-myopia.addmodal :user="$user" table="layzyeye"/>