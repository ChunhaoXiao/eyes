@extends('admin.layout')

@section('content')
    <p><a class="btn btn-info mb-3" href="{{route('product.create')}}">添加</a></p>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>图片</th>
            <th>产品名称</th>
            <th>价格</th>
            <th>状态</th>
            <th>添加时间</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td><img src="{{ asset('storage/'.$v->cover) }}" alt="{{$v->name}}" width="50" height="50"></td>
                    <td>{{ $v->name }}</td>

                    <td>{{ $v->price }}</td>
                    <td>{{$v->status == 1? '正常':'已禁用'}}</td>
                    <td>{{ $v->create_time }}</td>
                    <td>
                    <a class="pe-7s-note btn mr-2" href="{{route('product.edit',$v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('product.destroy',$v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection