@extends('admin.layout')

@section('content')
    <p><a class="btn btn-primary" href="{{ route('group.field.create', $group) }}">添加</a></p>

    <div class="row">
        <div class="col-sm-10">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">{{$group->table->description}} 表的 {{$group->name}} 分组数据字段</h5>
                    <table class="mb-0 table">
                        <thead>
                        <tr>
                            <th>字段标签</th>
                            <th>字段名称</th>
                            <th>排序</th>
                            <th>表单组件</th>
                            <th>是否隐藏</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $v)
                                <tr>
                                    <td>{{ $v->label }}</td>
                                    <td>{{ $v->name }}</td>
                                    <td>{{ $v->sort }}</td>
                                    <td>{{ $v->component }}</td>
                                    <td>{{ $v->is_hidden }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>                    
@endsection