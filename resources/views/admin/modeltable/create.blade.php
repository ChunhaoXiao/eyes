@extends('admin.layout')

@section('content')
    <div class="tab-content">
        <div class="main-card mb-3 card p-2">
            <form action="{{ route('table.store') }}" method="post">
                <x-textinput text="模型名称" name="model_name"  value="1"/>
                <x-textinput text="描述" name="description"  value=""/>
                <x-submitbutton />
            </form>
            <x-errmsg />
        </div>    
    </div>
@endsection