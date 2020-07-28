@extends('admin.layout')
@section('nav') 添加/编辑 角色 @endsection
@section('content')
    <form action="{{isset($data) ? route('brand.update', ['type' => request()->type, $data]): route('brand.store', ['type' => request()->type])}}" method="post">
        <x-formtext text="名称" labelcol="1" name="name" :value="$data->name??''"/>
        <x-formtext text="描述" labelcol="1" name="description" :value="$data->description??''"/>
        <x-radio text="状态" :options="['1' => '正常', '0' => '禁用']" col="1" name="status" :checked="$data->checked??1"/>
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection