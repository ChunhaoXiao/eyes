@extends('admin.layout')

@section('content')
    <p>
        <a href="{{route('doctors.create')}}" class="btn btn-info mb-3">添加</a>
    </p>
    <table class="table table-hover">
        <thead>
            
            <th>医生</th>
            <th>照片</th>
            <th>职称</th>
            <th>行政职务</th>
            <th>排序</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    
                    <td>{{ $v->title }}</td>
                    <td><img src="{{ asset('storage/'.$v->picurl) }}" width="50" height="50"/></td>
                    <td>{{ $v->academic }}</td>
                    <td>{{ $v->administration }}</td>
                    <td>{{ $v->orderid }}</td>
                    <td>
                    <a class="pe-7s-note btn mr-2" href="{{route('doctors.edit', $v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('doctors.destroy',$v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection