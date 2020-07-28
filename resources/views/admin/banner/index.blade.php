@extends('admin.layout')

@section('content')
    <p class="p-2"><a class="btn btn-info" href="{{route('banner.create')}}">添加banner</a></p>
    <table class="table table-hover">
        <thead>
            
            <th>图片</th>
            <th>链接</th>
            <th>排序</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    
                    <td><img src="{{asset('Storage/'.$v->picurl)}}" alt="" width="100" height="100"></td>
                    <td>{{ $v->linkurl}}</td>
                    <td>{{$v->orderid}}</td>
                   
                    <td>
                        <a class="pe-7s-note btn mr-2" href="{{route('banner.edit', $v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('banner.destroy',$v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection