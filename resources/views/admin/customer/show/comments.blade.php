@extends('admin.customerlayout')
@section('other')

    <div class="container">
      <a href="javascript:;" id="create_comment" class="btn btn-secondary mb-2 border">添加内容 <span class="font-weight-bold">+</span></a>
    </div>

    <div class="container">
        @foreach($user->comments as $v)
        <x-comments.item :data="$v"/>
        @endforeach
    </div>
    


    <script>
        $("#create_comment, a[data-type=edit]").on('click', function(e) {
            $("#add_comment").modal()
            $("textarea[name=c_comments]").val('');
            $("input[name=c_date]").val("{{now()->toDateString()}}");
            $("input[name=id]").val()
            const url = $(this).data('url')
            if(url) {
                //alert(url)
                $.ajax({
                    url:url,
                    success:res => {
                        console.log(res)
                        $("textarea[name=c_comments]").val(res.c_comments)
                        $("input[name=c_date]").val(res.c_date)
                        $("input[name=id]").val(res.id);
                    }
                })
            }
        })
    </script>
@endsection

<x-comments.commentsmodal :user="$user"/>