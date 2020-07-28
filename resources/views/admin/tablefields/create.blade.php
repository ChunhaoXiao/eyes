@extends('admin.layout')
@section('content')
    <div class="tab-content">
        <div class="main-card mb-3 card p-2">
            <h3>添加字段</h3>
            <form action="{{ route('group.field.store', $group) }}" method="post">
                <x-textinput text="字段标签" name="label"  value=""/>
                <x-textinput text="字段名" name="name"  value=""/>
                <x-textinput text="字段排序" name="sort"  value="" type="number"/>
                <x-textinput text="表单组件" name="component"  value=""/>
                <x-radio text="是否隐藏" name="is_hidden" options="否,前台隐藏,前后台隐藏" :checked="$checked??0"/>
               
                <x-submitbutton />
            </form>
            <x-errmsg />
        </div>    
    </div>
@endsection