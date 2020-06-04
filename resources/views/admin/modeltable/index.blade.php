@extends('admin.layout')

@section('content')
    <p><a class="btn btn-primary" href="{{ route('table.create') }}">添加</a></p>
    <div class="row">
        <div class="col-sm-10">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Simple table</h5>
                    <table class="mb-0 table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>表名</th>
                            <th>描述</th>
                            <th>字段分组</th>
                            <th>字段管理</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $v)
                            <tr>
                                <th scope="row">{{ $v->id }}</th>
                                <td>{{ $v->model_name }}</td>
                                <td>{{ $v->description }}</td>
                                <td><a href="{{ route('tables.groups.index', $v) }}">字段分组</a></td>
                                <td>字段管理</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>                    
@endsection