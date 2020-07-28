@extends('admin.layout')

@section('content')
    <p class="p-2"><a class="btn btn-info" href="{{route('brand.create', ['type' => request()->type])}}">添加品牌</a></p>
    <table class="table table-hover">
        <thead>
            
            <th>名称</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    
                    <td>{{ $v->name }}</td>
                   
                    <td>
                        <a class="pe-7s-note btn mr-2" href="{{route('brand.edit', ['type' => request()->type, $v])}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('brand.destroy',['type' => request()->type, $v])}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection