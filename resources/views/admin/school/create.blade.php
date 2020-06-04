@extends('admin.layout')
@section('nav') 添加/编辑 学校 @endsection
@section('content')
    <form action="{{isset($data) ? route('school.update', $data): route('school.store')}}" method="post">
        <x-formtext text="学校名称" labelcol="1" name="name" :value="$data->name??''"/>
        <x-formtext text="排序" labelcol="1" name="order" :value="$data->order??0" type="number"/>

        <x-textarea text="描述" name="description" labelcol="1" :default="$data->description??''"/>

            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection