@extends('admin.layout')

@section('content')
<div class="row mb-3">
      <div class="col-sm-8">
        <a class="btn btn-info" href="{{route('school.create')}}">添加学校</a>
      </div>
      <div class="col-sm-4">
        <form action="{{route('school.index')}}">
            <div class="row align-items-center">
                <div class="col">
                  <input type="text" name="name" class="flex-sm-3 form-control" placeholder="学校名字" value="{{request()->name??''}}">
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
            
            <th>学校名称</th>
            <th>排序</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->order }}</td>

                
                    <td>
                        <a class="pe-7s-note btn mr-2" href="{{route('school.edit', $v)}}" style="font-size:20px"></a>
                        <a class="pe-7s-trash btn" href="#" style="font-size: 20px" data-url="{{route('school.destroy', $v)}}"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>
        {{$datas->withQueryString()->links()}}
    </p>
@endsection