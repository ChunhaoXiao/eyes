@extends('admin.layout')

@section('content')
    <table class="table">
        <thead>
          <th>名字</th>
          <th>标识</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                  <td class="{{ $v->pid == 0?'font-weight-bold':'' }}">@if($v->pid > 0) &nbsp;&nbsp;-- @endif<a href="#">{{ $v->name }}</a></td>
                  <td>{{ $v->identity }}</td>
                  <td>
                    <div class="col-s">
                        @if($v->pid > 0)
                        <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="{{$v->identity}}" {{$v->is_display == 1?'checked' :''}} data-id="{{$v->id}}">
                        <label class="custom-control-label" for="{{$v->identity}}">前台显示此区块</label>
                        </div>
                        @endif
                    </div>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(function(){
          $(".custom-control-label").on('click', function(e){
            alert(11);
          })
        })
    </script>
@endsection