@extends('admin.layout')
@section('content')
    <div class="tab-content">
        <div class="main-card mb-3 card p-2">
            <form action="{{ route('tables.groups.store', $table) }}" method="post">
                <x-textinput text="分组名称" name="name" />
                <x-textinput text="排序" name="sort" type="number" />
                <x-radio text="是否使用组件" name="use_group_component" options="否,是" :checked="$checked??0" />
                <x-submitbutton />
            </form>
            <x-errmsg />
        </div>    
    </div>
@endsection