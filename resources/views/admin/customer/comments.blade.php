@extends('admin.customerlayout')
@section('other')
<p id="create_comment" class="btn btn-info">添加</p>
    @foreach($user->comments as $v)
     <x-comments.item :data="$v"/>
    @endforeach


    <script>
        $("#create_comment").on('click', function(e) {
            $("#add_comment").modal()
            alert('aaa');
            const date = "{{now()->toDateString()}}";
            alert(date)
            $("input[name=c_date]").val(date)
        })
    </script>
@endsection

<x-comments.commentsmodal :user="$user"/>