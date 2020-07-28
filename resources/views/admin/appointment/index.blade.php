@extends('admin.layout')

@section('content')
    <p class="p-2"><a class="btn btn-info" href="{{route('appointment.create')}}">添加</a></p>
    <table class="table table-hover">
        <thead>
            
            <th>标题</th>
            <th>预约时间</th>
            <th>所属分店</th>
            <th>排序</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->apptime->toDateString() }}</td>
                    <td>{{ $v->shop->title}}</td>
                    <td>{{ $v->orderid }}</td>
                   
                    <td>
                        <a class="pe-7s-note btn mr-2" href="{{route('appointment.edit',$v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('appointment.destroy',$v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection