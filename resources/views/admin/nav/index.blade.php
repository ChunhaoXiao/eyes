@extends('admin.layout')

@section('content')
    <p><a href="{{route('nav.create')}}" class="btn btn-info">添加</a></p>
    <table class="table table-hover">
       <thead>
           <th>名称</th>
           <th>链接</th>
           <th>状态</th>
           <th>排序</th>
           <th>操作</th>
       </thead>
       <tbody>
           @foreach($datas as $v)
                <tr>
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->url }}</td>
                    <td>@if($v->status) 
                       <i class="fa fa-fw text-success" aria-hidden="true" title="已启用"></i>  
                       @else
                       <i class="fa fa-fw text-danger" aria-hidden="true" title="已禁用"></i> 
                        @endif
                    </td>
                    <td>{{ $v->orderid }}</td>
                    <td>
                    <a class="pe-7s-note btn mr-2" href="{{route('nav.edit',$v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('nav.destroy',$v)}}"></a>
                    </td>
                </tr>

           @endforeach
       </tbody>
    </table>
@endsection