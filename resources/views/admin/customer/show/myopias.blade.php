@extends('admin.customerlayout')
@section('form')
    <p id="create_myopia" class="btn btn-info">添加</p>
    @foreach($user->myopias as $v)
      <div class="border p-2 mb-4">
        <x-myopia.card :data="$v"/>
        <x-myopia.cate :data="$v"/>
        <p>
          <i data-url="{{ route('myopias.destroy', ['table' => 'myopia', 'myopia' => $v->id]) }}" class="pe-7s-trash p-3"></i>
        </p>
      </div>
      
    @endforeach

    <script>
    $("#create_myopia").on('click', function(e) {
        $("#add_myopia").modal()
    })
</script>
@endsection
<x-myopia.addmodal :user="$user" table="myopia"/>

