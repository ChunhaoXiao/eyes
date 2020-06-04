@extends('admin.layout')

@section('content')
    <div class="container"> 
        <p><a class="btn btn-info mb-3" href="{{route('admin.customer.create')}}">录入客户信息</a></p>
        <x-user.search />
        <div class="row">
            <div class="col-sm">
                <p class="p-2">共有 <b>{{ $datas->total() }}</b> 条记录</p>
                <table class="table table-hover">
                    <thead class="bg-info text-white">
                        <th class="d-flex"><span>编号</span>
                            <div class="d-flex flex-column ml-1 justify-content-center" style="height:20px">
                              <a href="{{route('admin.users.index', array_merge(request()->query(), ['order' => 'id_asc']))}}"><img style="width: 10px ;height:10px" src="{{asset('images/asc.png')}}" /></a>
                              <a href="{{route('admin.users.index', array_merge(request()->query(), ['order' => 'id_desc']))}}"><img style="width: 10px ;height:10px" src="{{asset('images/desc.png')}}" /></a>
                            </div>
                        </th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>学校</th>
                        <th>手机</th>
                        <th>会员级别</th>
                        <th class="d-flex">
                            <span>消费金额</span>
                            <div class="d-flex flex-column ml-1 justify-content-center" style="height:20px">
                              <a href="{{route('admin.users.index', array_merge(request()->query(), ['order' => 'tt_asc']))}}"><img style="width: 10px ;height:10px" src="{{asset('images/asc.png')}}"/></a>
                              <a href="{{route('admin.users.index', array_merge(request()->query(), ['order' => 'tt_desc']))}}"><img style="width: 10px ;height:10px" src="{{asset('images/desc.png')}}" /></a>
                            </div>
                        </th>
                        <th class="text-center" colspan="3">操作</th>
                    </thead>
                    <tbody>
                        @foreach($datas as $v)
                        <tr>
                            <td>{{$v->id}}</td>
                            <td><a href="{{ route('admin.customer.index', $v) }}">{{ $v->name }}</a></td>
                            <td>{{ $v->sex == 1?'男':'女' }}</td>
                            <td>@if($v->age) {{ $v->age }}岁 @else - @endif </td>
                            <td>{{ $v->schoolobj->name }}</td>
                            <td>{{ $v->phone }}</td>
                            <td>{{ $v->level == 1 ?'一般会员' : '特殊会员'}}</td>
                            <td>{{ $v->total_consumes['total_consumes'] }} 元</td>
                            <td>就诊卡</td>
                            <td><a href="{{ route('admin.customer.index', $v) }}">查看</a></td>
                            <td>发送模板消息</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $datas->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection