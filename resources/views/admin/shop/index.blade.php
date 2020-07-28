@extends('admin.layout')

@section('content')
    <p class="p-2"><a class="btn btn-info" href="{{route('shops.create')}}">添加分店</a></p>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>分店名称</th>
            <th>分店地址</th>
            <th>分店电话</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->address }}</td>
                    <td>{{ $v->tel }}</td>
                    
                    <td>
                        <a class="pe-7s-note btn mr-2" href="{{route('shops.edit', $v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('shops.destroy', $v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection