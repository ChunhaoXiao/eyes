@extends('admin.layout')

@section('content')
    
    <table class="table table-hover">
        <thead>
            
            <th>预约人</th>
            <th>预约人电话</th>
            <th>预约医生</th>
            <th>店铺</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    
                    <td>{{ $v->customer->name }}</td>
                    <td>{{ $v->customer->phone ??''}}</td>
                    <td>{{ $v->doctor->title}}</td>
                    <td>{{ $v->shop->title }}</td>
                   
                    <td>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection