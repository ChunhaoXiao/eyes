@extends('admin.layout')

@section('content')
    <p class="p-2"><a class="btn btn-info" href="{{route('areas.create')}}">添加区域</a></p>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>名称</th>
            <th>排序</th>
            
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->orderid }}</td>

                   
                    <td>
                        <a class="pe-7s-note btn mr-2" href="{{route('areas.edit', $v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('areas.destroy', $v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection