@extends('admin.layout')

@section('content')
    <p><a class="btn btn-info mb-3" href="{{route('message.create')}}">添加</a></p>
    <table class="table table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>标识</th>
            <th class="w-50">消息内容</th>
            <th>创建时间</th>
            
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->mark }}</td>
                    <td>
                        @foreach($v->content as $k => $item)
                            <span class="font-weight-bold">{{$k}}：</span> {{$item}} <br>
                        @endforeach
                    </td>
                    <td>{{ $v->create_time }}</td>
                    <td>
                    <a class="pe-7s-note btn mr-2" href="{{route('message.edit',$v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('message.destroy',$v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection