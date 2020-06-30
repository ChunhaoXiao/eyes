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
                  <td><a href="{{route('customeritem.show', $v)}}">{{ $v->name }}</a></td>
                  <td>{{ $v->identity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection