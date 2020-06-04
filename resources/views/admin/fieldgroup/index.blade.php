@extends('admin.layout')

@section('content')
    <p><a class="btn btn-primary" href="{{ route('tables.groups.create', $table) }}">添加</a></p>
    <div class="row">
        <div class="col-sm-10">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">{{$table->description}}表 字段分组</h5>
                    <table class="mb-0 table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>分组名称</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $v)
                            <tr>
                                <th scope="row">{{ $v->id }}</th>
                                <td>{{ $v->name }}</td>
                                <td>{{ $v->sort }}</td>
                                <td><a href="{{ route('group.field.index', $v) }}">字段管理</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>                    
@endsection