@extends('admin.layout')

@section('content')
    <p class="p-2"><a class="btn btn-info" href="{{route('roles.create')}}">添加角色</a></p>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>名称</th>
            <th>描述</th>
            <th>状态</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->description }}</td>

                    <td>{{ $v->status == 1 ? '正常' : '禁用'}}</td>
                    <td>
                        <a class="pe-7s-note btn mr-2" href="{{route('roles.edit', $v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="javascript:;" style="font-size: 20px" data-url="{{route('roles.destroy', $v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection