@extends('admin.layout')

@section('content')
  
    <!-- <div class="p-2 d-flex justify-content-sm-between">
      <a class="btn btn-info flex-sm-2" href="{{route('manager.create')}}">添加管理员</a>
      <form action="">
      <div class="d-flex">
          
          <input type="text" class="flex-sm-3 form-control" placeholder="用户名">
          <button>搜索</button>
        </div>
        
      </form>
      
    </div> -->
    <div class="row mb-3">
      <div class="col-sm-8">
        <a class="btn btn-info" href="{{route('manager.create')}}">添加管理员</a>
      </div>
      <div class="col-sm-4">
        <form action="{{route('manager.index')}}">
            <div class="row align-items-center">
                <div class="col">
                  <input type="text" name="username" class="flex-sm-3 form-control" placeholder="用户名" value="{{request()->username??''}}">
                </div>
                <div class="col-sm-auto">
                  <button class="btn btn-info">搜索</button>
                </div>
            </div>
        </form>
      </div>
    </div>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>用户名</th>
            <th>昵称</th>
            <th>手机号</th>
            <th>所属组</th>
            <th>状态</th>
            <th>创建时间</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->fake_phone }}</td>
                    <td>{{ $v->nickname }}</td>
                    <td>{{ $v->fake_phone }}</td>
                    <td></td>

                    <td>{{ $v->status == 1 ? '正常' : '禁用'}}</td>
                    <td>
                        {{$v->create_time}}
                    </td>
                    <td>
                        <a class="pe-7s-note btn mr-2" href="{{route('manager.edit', $v)}}" style="font-size:20px"></a>
                        <a data-url="{{route('manager.destroy', $v)}}" class="pe-7s-trash btn" href="#" style="font-size: 20px"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>{{ $datas->links()}}</p>
@endsection