@extends('admin.customerlayout')
@section('form')
    <p id="create_record" class="btn btn-info">添加</p>
    @foreach($user->records as $v)
      <div class="border p-2 mb-4">
        <x-record.item :data="$v"/>
      </div>
    @endforeach

    <script>
    $("#create_record").on('click', function(e) {
        $("#add_record").modal()
    })
</script>
@endsection
<x-record.recordmodal :user="$user"/>
